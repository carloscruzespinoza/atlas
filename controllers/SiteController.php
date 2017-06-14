<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ValidarFormulario;//nuevo
use app\models\ValidarFormularioAjax; //nuevo recien creado
use yii\widgets\ActiveForm; //para que funcione el modelo recien creado
use yii\web\Response;
//
use app\models\FormAlumnos;
use app\models\Alumnos;
//1*
use app\models\FormUsuario;
use app\models\Usuario;
//2*
use app\models\FormListing;
use app\models\Listing;
//3*
use app\models\FormStatuslisting;
use app\models\Statuslisting;
//4*
use app\models\FormTipolisting;
use app\models\Tipolisting;
//5*
use app\models\FormOwner;
use app\models\Owner;
//6*
use app\models\FormFuentelead;
use app\models\Fuentelead;
//7*
use app\models\FormLead;
use app\models\Lead;
//8
use app\models\FormAsignacion;
use app\models\Asignacion;
//9
use app\models\FormEstadoseguimiento;
use app\models\Estadoseguimiento;
//10
use app\models\FormTareas;
use app\models\Tareas;
//11
use app\models\FormEtiqueta;
use app\models\Etiqueta;
//12
use app\models\FormSeguimientos;
use app\models\Seguimientos;
//13
use app\models\FormTareatodo;
use app\models\Tareatodo;

class SiteController extends Controller
{
    //PASO 1. Config la BD
    //PASO 2. CREAR LAS FUNCIONES ACTION CREAR PARA LAS TABLAS
    //TABLA USUARIO
    public function actionCreateusuario()
    {
        $model = new FormUsuario;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Usuario;
                 $table->nomUsuario=$model->nomUsuario;
                $table->cedUsuario=$model->cedUsuario;
                $table->dirUsuario=$model->dirUsuario;
                $table->celUsuario=$model->celUsuario;
                $table->telUsuario=$model->telUsuario;
                $table->emailUsuario=$model->emailUsuario;
                $table->countryUsuario=$model->countryUsuario;
                $table->fnacUsuario=$model->fnacUsuario;
                $table->sexoUsuario=$model->sexoUsuario;
                $table->fAltaUsuario=$model->fAltaUsuario;
                $table->cargoUsuario=$model->cargoUsuario;
                $table->fotoUsuario=$model->fotoUsuario;
                $table->usernameUsuario=$model->usernameUsuario;
                $table->passwUsuario=$model->passwUsuario;

         if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->nomUsuario=null;
                    $model->cedUsuario= null;
                    $model->dirUsuario= null;
                    $model->celUsuario= null;
                    $model->telUsuario= null;
                    $model->emailUsuario= null;
                    $model->countryUsuario= null;
                    $model->fnacUsuario= null;
                    $model->sexoUsuario= null;
                    $model->fAltaUsuario= null;
                    $model->cargoUsuario= null;
                    $model->fotoUsuario= null;
                    $model->usernameUsuario= null;
                    $model->passwUsuario= null;
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createusuario", ['model' => $model, 'msg' => $msg]);
        
    }
        // TABLA LISTING Y SUS TABLAS ASOCIATIVAS
    public function actionCreatelisting()
    {
        $model = new FormListing;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Listing;
                $table->idListing=$model->idListing;
                $table->idStatusListing=$model->idStatusListing;
                $table->codInterListing=$model->codInterListing;
                $table->fechaListing=$model->fechaListing;
                $table->comision=$model->comision;
                $table->fotoArchivo=$model->fotoArchivo;
                $table->scannedFisico=$model->scannedFisico;
                $table->escritura=$model->escritura;
                $table->plano=$model->plano;
                $table->rotulado=$model->rotulado;
                $table->nomListing=$model->nomListing;
                $table->idOwner=$model->idOwner;
                $table->addressListing=$model->addressListing;
                $table->cityListing=$model->cityListing;
                $table->timeinMarket=$model->timeinMarket;
                $table->idTipoListing=$model->idTipoListing;
                $table->rooms=$model->rooms;
                $table->baths=$model->baths;
                $table->garage=$model->garage;
                $table->cieloFalso=$model->cieloFalso;
                $table->salas=$model->salas;
                $table->stories=$model->stories;
                $table->terraza=$model->terraza;
                $table->bodega=$model->bodega;
                $table->piscina=$model->piscina;
                $table->spa=$model->spa;
                $table->jardin=$model->jardin;
                $table->hotWater=$model->hotWater;
                $table->bbqArea=$model->bbqArea;
                $table->landArea=$model->landArea;
                $table->builtArea=$model->builtArea;
                $table->aguaPotable=$model->aguaPotable;
                $table->lineaTel=$model->lineaTel;
                $table->cableTv=$model->cableTv;
                $table->electricidad=$model->electricidad;
                $table->aireAcon=$model->aireAcon;
                $table->seguridadp=$model->seguridadp;
                $table->powerBackup=$model->powerBackup;
                $table->mesHoa=$model->mesHoa;
                $table->fechaConstruc=$model->fechaConstruc;
                $table->parqueoCerca=$model->parqueoCerca;
                $table->tipoCalle=$model->tipoCalle;
                $table->materialPared=$model->materialPared;
                $table->arquitectura=$model->arquitectura;
                $table->techo=$model->techo;
                $table->piso=$model->piso;
                $table->waterBackup=$model->waterBackup;
                $table->sewage=$model->sewage;
                $table->rentable=$model->rentable;
                $table->rentalPrice=$model->rentalPrice;
                $table->mesesRentable=$model->mesesRentable;
                $table->maxPersonas=$model->maxPersonas;
                $table->positivosNegativos=$model->positivosNegativos;
                $table->esExclusiva=$model->esExclusiva;
                $table->idUsuario=$model->idUsuario;

         if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->idListing=null;
                    $model->idStatusListing=null;
                    $model->codInterListing=null;
                    $model->fechaListing=null;
                    $model->comision=null;
                    $model->fotoArchivo=null;
                    $model->scannedFisico=null;
                    $model->escritura=null;
                    $model->plano=null;
                    $model->rotulado=null;
                    $model->nomListing=null;
                    $model->idOwner=null;
                    $model->addressListing=null;
                    $model->cityListing=null;
                    $model->timeinMarket=null;
                    $model->idTipoListing=null;
                    $model->rooms=null;
                    $model->baths=null;
                    $model->garage=null;
                    $model->cieloFalso=null;
                    $model->salas=null;
                    $model->stories=null;
                    $model->terraza=null;
                    $model->bodega=null;
                    $model->piscina=null;
                    $model->spa=null;
                    $model->jardin=null;
                    $model->hotWater=null;
                    $model->bbqArea=null;
                    $model->landArea=null;
                    $model->builtArea=null;
                    $model->aguaPotable=null;
                    $model->lineaTel=null;
                    $model->cableTv=null;
                    $model->electricidad=null;
                    $model->aireAcon=null;
                    $model->seguridadp=null;
                    $model->powerBackup=null;
                    $model->mesHoa=null;
                    $model->fechaConstruc=null;
                    $model->parqueoCerca=null;
                    $model->tipoCalle=null;
                    $model->materialPared=null;
                    $model->arquitectura=null;
                    $model->techo=null;
                    $model->piso=null;
                    $model->waterBackup=null;
                    $model->sewage=null;
                    $model->rentable=null;
                    $model->rentalPrice=null;
                    $model->mesesRentable=null;
                    $model->maxPersonas=null;
                    $model->positivosNegativos=null;
                    $model->esExclusiva=null;
                    $model->idUsuario=null;
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createlisting", ['model' => $model, 'msg' => $msg]);
        
    }
    public function actionCreatestatuslisting()
    {
        
         $model = new FormStatuslisting;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Statuslisting;
                $table->nomStatus = $model->nomStatus;
                
                if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->nomStatus = null;
                    
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createstatuslisting", ['model' => $model, 'msg' => $msg]);
        
    }
    public function actionCreatetipolisting()
    {
        
        $model = new FormTipolisting;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Tipolisting;
                $table->nomListing = $model->nomListing;
                
                if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->nomListing = null;
                    
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createtipolisting", ['model' => $model, 'msg' => $msg]);
        
        
    }
        //TABLA DUEÑO
    public function actionCreateowner()
    {
      $model = new FormOwner;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Owner;
                $table->nomOwner = $model->nomOwner;
                $table->phOwner = $model->phOwner;
                $table->celOwner = $model->celOwner;
                $table->addressOwner = $model->addressOwner;
                $table->nacionality = $model->nacionality;
                
                if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->nomOwner = null;
                    $model->phOwner = null;
                    $model->celOwner = null;
                    $model->addressOwner = null;
                    $model->nacionality = null;
                    
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createowner", ['model' => $model, 'msg' => $msg]);   
    }
        //TABLA LEAD
    public function actionCreatefuentelead()
    {
        $model = new FormFuentelead;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Fuentelead;
                $table->nombreFuente = $model->nombreFuente;
                
                if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->nombreFuente = null;
                    
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createfuentelead", ['model' => $model, 'msg' => $msg]);
        
    }
     public function actionCreatelead()
    {
        $model = new FormLead;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Lead;
                $table->nomLead = $model->nomLead;
                $table->paisLead = $model->paisLead;
                $table->emalLead = $model->emalLead;
                $table->telLead = $model->telLead;
                $table->celLead = $model->celLead;
                $table->fechaLead = $model->fechaLead;
                $table->idFuenteLead = $model->idFuenteLead;
                
                if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->nomLead = null;
                    $model->paisLead = null;
                    $model->emalLead = null;
                    $model->telLead = null;
                    $model->celLead = null;
                    $model->fechaLead = null;
                    $model->idFuenteLead = null;
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createlead", ['model' => $model, 'msg' => $msg]);
        
    }
        //TABLA ASIGNACION
    public function actionCreateasignacion()
    {
    $model = new FormAsignacion;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Asignacion;
                $table->idUsuario = $model->idUsuario;
                $table->idLead = $model->idLead;
                $table->codInterListing = $model->codInterListing;
                $table->fechaAsig = $model->fechaAsig;
                $table->idListing = $model->idListing;
                
                if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->idLead = null;
                    $model->codInterListing = null;
                    $model->fechaAsig = null;
                    $model->idListing = null;
                    
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createasignacion", ['model' => $model, 'msg' => $msg]);
        
    }
        //TABLA SEGUIMIENTOS
    public function actionCreateestadoseguimiento()
    {
        $model = new FormEstadoseguimiento;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Estadoseguimiento;
                $table->nomSeg = $model->nomSeg;
                
                if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->nomSeg = null;
                    
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createestadoseguimiento", ['model' => $model, 'msg' => $msg]);
        
    }
     public function actionCreatetareas()
    {
        $model = new FormTareas;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Tareas;
                $table->nomTarea = $model->nomTarea;
                
                if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->nomTarea = null;
                    
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createtareas", ['model' => $model, 'msg' => $msg]);
        
    }
    public function actionCreateetiqueta()
    {
        $model = new FormEtiqueta;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Etiqueta;
                $table->nomEtiqueta = $model->nomEtiqueta;
                
                if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->nomEtiqueta = null;
                    
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createetiqueta", ['model' => $model, 'msg' => $msg]);
        
    }
    public function actionCreateseguimientos()
    {
        $model = new FormSeguimientos;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Seguimientos;
                $table->idTareaSeg = $model->idTareaSeg;
                $table->idEtiqueta = $model->idEtiqueta;
                $table->idEstadoSeg = $model->idEstadoSeg;
                $table->idAsig = $model->idAsig;
                $table->fechaSeg = $model->fechaSeg;
                $table->nota = $model->nota;
                
                if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->idTareaSeg = null;
                    $model->idEtiqueta = null;
                    $model->idEstadoSeg = null;
                    $model->idAsig = null;
                    $model->fechaSeg = null;
                    $model->nota = null;
                    
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createseguimientos", ['model' => $model, 'msg' => $msg]);
        
    }
        //TABLA TODO
    public function actionCreatetareatodo()
    {
        $model = new FormTareatodo;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Tareatodo;
                $table->nomTodoTarea = $model->nomTodoTarea;
                
                if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->nomTodoTarea = null;
                    
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createtareatodo", ['model' => $model, 'msg' => $msg]);
        
    }
    public function actionCreatetodo()
    {
        $model = new FormTodo;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Todo;
                $table->fechaTodo = $model->fechaTodo;
                $table->horaTodo = $model->horaTodo;
                $table->estatusTodo = $model->estatusTodo;
                $table->idTodoTarea = $model->idTodoTarea;
                $table->idSeg = $model->idSeg;
                
                if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->fechaTodo = null;
                    $model->horaTodo = null;
                    $model->estatusTodo = null;
                    $model->idTodoTarea = null;
                    $model->idSeg = null;
                    
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("createtodo", ['model' => $model, 'msg' => $msg]);
        
    }
    ///
    public function actionCreate()
    {
        $model = new FormAlumnos;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Alumnos;
                $table->nombre = $model->nombre;
                $table->apellidos = $model->apellidos;
                $table->clase = $model->clase;
                $table->nota_final = $model->nota_final;
                if ($table->insert())
                {
                    $msg = "Enhorabuena registro guardado correctamente";
                    $model->nombre = null;
                    $model->apellidos = null;
                    $model->clase = null;
                    $model->nota_final = null;
                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("create", ['model' => $model, 'msg' => $msg]);
    }

    //PASO 6. Anexando Acciones
    public function actionSaluda($get="Tutorial Yii")
    {
        $mensaje ="Hola Mundo";
        $numeros=[0,1,2,3,4,5];
        
        return $this->render("saluda",
                [
                    "varSaludo"=> $mensaje,
                    "arrayNumeros" => $numeros,
                    "getVar" => $get
                ]);
        
    }
    
    //pintar formulario
    public function actionFormulario($mensaje = null)
    {
         return $this->render("Formulario",["mensaje"=>$mensaje]);
    }      
    //capturar datos y reenviarlos al actionFormulario
    public function actionRequest()
    {
        $mensaje = null;
        
        if(isset($_REQUEST["nombre"]))
        {
            $mensaje ="Bien, has enviado tu nombre correctamente: ".$_REQUEST["nombre"];
        }
        $this->redirect(["site/formulario","mensaje"=>$mensaje]);
    }
    
    //validar los datos antes de que sean redireccionados
    public function actionValidarformulario()
    {
        $model = new ValidarFormulario;
        if($model->load(Yii::$app->request->post())){
            if($model->validate())
            {
                //por ejemplo, consultar en una base de datos
               
            }
            else
            {
                 $model->getErrors();
            }
        }
        return $this->render("validarformulario",["model"=>$model]);
    }
    
    public function actionValidarformularioajax()
    {
        $model = new ValidarFormularioAjax; //instancia del modelo
        $msg = null;//para mandar mensaje
        if($model->load(yii::$app->request->post()) && Yii::$app->request->isAjax)
            {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                ///por ejemplo hacer la consulta a la BD
                $msg="En hora buena, formulario enviado correctamente";
                $model->nombre = null;
                $model->email = null;
            }
            else
            {
                $model->getErrors();
            }
        }
        
        return $this->render("validarformularioajax",['model'=>$model, 'msg'=>$msg]);
    }
    
    
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
