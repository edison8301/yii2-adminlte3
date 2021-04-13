<?php

namespace app\controllers;

use Yii;
use app\models\Buku;
use app\models\BukuSearch;
use app\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;
use app\models\Penulis;
use app\models\Penerbit;
use app\models\Kategori;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

/**
 * BukuController implements the CRUD actions for Buku model.
 */
class BukuController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Buku models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BukuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Buku model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Buku model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Buku();

        // dropdown list Array
        $penulis = Penulis::find()->all();
        $penulis = ArrayHelper::map($penulis,'id','nama');

        $penerbit = Penerbit::find()->all();
        $penerbit = ArrayHelper::map($penerbit,'id','nama');

        $kategori = Kategori::find()->all();
        $kategori = ArrayHelper::map($kategori,'id','nama');

        if ($model->load(Yii::$app->request->post()) && $model->save()) 
        {
            $sampul = UploadedFile::getInstance($model, 'sampul');
            $berkas = UploadedFile::getInstance($model, 'berkas');
            // merubah nama filenya.
            $model->sampul = time() . '_' . $sampul->name;
            $model->berkas = time() . '_' . $berkas->name;
            // save data ke databases.
            $model->save(false);
            // lokasi simpan file.
            $sampul->saveAs(Yii::$app->basePath . '/web/images/upload/sampul/' . $model->sampul);
            $berkas->saveAs(Yii::$app->basePath . '/web/images/upload/berkas/' . $model->berkas);
            // Menuju ke view id yang data dibuat.
           return $this->redirect(['view', 'id' => $model->id]);
        }
            return $this->render('create', [
           'model' => $model,
           'penulis' => $penulis,
           'penerbit' => $penerbit,
           'kategori' => $kategori,
       ]);
    }

    /**
     * Updates an existing Buku model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $penulis = Penulis::find()->all();
        $penulis = ArrayHelper::map($penulis,'id','nama');

        $penerbit = Penerbit::find()->all();
        $penerbit = ArrayHelper::map($penerbit,'id','nama');

        $kategori = Kategori::find()->all();
        $kategori = ArrayHelper::map($kategori,'id','nama');

        $sampul_lama = $model->sampul;
        $berkas_lama = $model->berkas;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) 
        {
            $sampul = UploadedFile::getInstance($model, 'sampul');
            $berkas = UploadedFile::getInstance($model, 'berkas');
            // Jika ada data file yang dirubah maka data lama akan di hapus dan di ganti dengan data baru yang sudah diambil jika tidak ada data yang dirubah maka file akan langsung save data-data yang lama.
            if ($sampul !== null) {
                $model->sampul = time() . '_' . $sampul->name;
                $sampul->saveAs(Yii::$app->basePath . '/web/images/upload/sampul/' . $model->sampul);
            } else {
                $model->sampul = $sampul_lama;
            }
            if ($berkas !== null) {
                $model->berkas = time() . '_' . $berkas->name;
                $berkas->saveAs(Yii::$app->basePath . '/web/images/upload/berkas/' . $model->berkas);
            } else {
                $model->berkas = $berkas_lama;
            }
            // Simpan data ke databases
            $model->save(false);
            // Menuju ke view id yang data dibuat.

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'kategori' => $kategori
        ]);
    }

    /**
     * Deletes an existing Buku model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $sampul_lama = $model->sampul;
        $berkas_lama = $model->berkas;

        if ($model->delete())
        {
           unlink('../web/images/upload/sampul/'.$sampul_lama);
           unlink('../web/images/upload/berkas/'.$berkas_lama);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Buku model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Buku the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Buku::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionPdf() 
    {
    // get your HTML raw content without any layouts or scripts
    $content = $this->renderPartial('exportPdf');
    
    // setup kartik\mpdf\Pdf component
    $pdf = new Pdf([
        // set to use core fonts only
        'mode' => Pdf::MODE_CORE, 
        // A4 paper format
        'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Krajee Report Title'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Daftar Buku'], 
            'SetFooter'=>['{PAGENO}'],
        ]
    ]); 
    // return the pdf output as per the destination setting
    return $pdf->render(); 
    }

    public function actionExcel()
    {
        $searchModel = new BukuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
        $template = Yii::getAlias('@hscstudio/export').'/templates/opentbs/ms-excel.xlsx';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
        $OpenTBS->VarRef['modelName']= "Buku";               
        $data = [];
        $no=1;
        foreach($dataProvider->getModels() as $buku){
            $data[] = [
                'no'=>$no++,
                'nama'=>$buku->nama,
                'tahun_terbit'=>$buku->tahun_terbit,
                'id_penulis' =>$buku->penulis->nama,
                'id_penerbit' =>$buku->penerbit->nama,
                'id_kategori' =>$buku->kategori->nama,
            ];
        }
        
        $data2[0] = [
                'no'=>'A',
                'nama'=>'B',
                'tahun_terbit'=>'C',
                'id_penulis' => 'D',
                'id_penerbit' => 'E',
                'id_kategori' => 'F',
            ];
        $data2[1] = [
                'no'=>'A',
                'nama'=>'B',
                'tahun_terbit'=>'C',
                'id_penulis' => 'D',
                'id_penerbit' => 'E',
                'id_kategori' => 'F',
            ];
        $OpenTBS->MergeBlock('data', $data);
        $OpenTBS->MergeBlock('data2', $data2);
        // Output the result as a file on the server. You can change output file
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'Buku.xlsx'); // Also merges all [onshow] automatic fields.          
        exit;
    } 
}
