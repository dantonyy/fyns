<?php $this->lang->load('redefinir_senha_lang', 'portuguese');?>

<style>
    .d_davi {
    border-color: #048B8B;
    color:#f4f6fa;
    }    

    .circle{
        border-radius: 50%;
        width: 50px;
        height: 50px; 
        background-color: #048B8B;
    }

    .center {
    margin: auto;
    padding: 50px;
    }

    .title_davi {
            display: inline-block;
            background-color: #048B8B;
            margin: 15px;
            border-radius: 50%;
        }
    .button_davi {
        color: #000;
        display: table-cell;
        vertical-align: middle; 
        text-align: center;
        height: 100px;
        width: 100px;
    }
    .card-title{
        text-align: center;
    }

</style>



<body style="background: #048B8B;">

    

        <div class="container" style=" margin: auto; top: 0; bottom: 0; left: 0; right: 0; width: 100%; height: 100px;">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-xl-6 main">
                    <div class="card o-hidden border-0 shadow-lg my-4">
                        <!-- Nested Row within Card Body -->
                        <div class="col">
                            <div class="p-4">
                                <div class="col">
                                    <div class="p-4">
                                        <div class="text-center">
                                    
                                            <div class="circle center fa-bounce fa-solid"  >
                                                <div class="fa-solid fa-d  d_davi fa-5x  " style="margin-left: -25px; margin-top:-40px;" >
                                                
                                                </div>
                                            </div>
                                            
                                            <h1 class="h4 text-gray-900 mb-4 ">Davi</h1>
                                        
                                        </div>
                                    </div>
                                </div>

                                <h1 class="text-center" ><?php echo lang('redefinir_senha');?></h1>

                                <?php if(isset($alerta)){ ?>
                                    <div class="alert alert-<?php echo $alerta['class']; ?>">
                                        <?php echo $alerta['mensagem']; ?>
                                    </div>
                                <?php }?>

                                <form class="user" action="<?php echo base_url('usuario/enviarEmail'); ?>" method="post">
                                    <br>
                                    <input type="hidden" name="captcha">
                                    <div class="form-group">
                                    <input name="email" class="form-control form-control-user" id="email" placeholder='<?php echo lang('texto_email');?>' required>
                                    <input style="display:none" name="resetar_senha" value="sim">
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 d-sm-grid  justify-content-md-end">
                                            <div class="form-group">
                                                <button type="submit" name="resetar" value="resetar" class="btn btn-success btn-user btn-block"  style="background-color:#048B8B;"><?php echo lang('solicitar');?></button>
                                            
                                            <a href="<?php echo base_url('login');?>" class="btn btn-danger " style="color=red"><?php echo lang('voltar');?></a>

                                            </div>
                                            
                                        </div>
                                    </div>
                                        
                                </form>
  
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
   