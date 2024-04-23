<?php
/*
 *  страница авторизации ЛК
 */    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ФПК АЛЬТЕРНАТИВА: личный кабинет клиента</title>
                        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/_bootswatch.scss">
        <link rel="stylesheet" type="text/css" href="css/_variables.scss">
        <style>
            body{
            background-color: <?=VIEW_BACKGROUND?>
            } 
            .aligncenter {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <p class="aligncenter">
            <img src="img/mylogo.png" alt="логотип Альтернативы">
        </p>
        <p class="aligncenter">
            Добрый день, <?=$Client->CLFIO?>
        </p>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" data-bs-toggle="tab" href="#profile" aria-selected="true" role="tab">Профиль</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" data-bs-toggle="tab" href="#anketa" aria-selected="false" tabindex="-1" role="tab">Анкета</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" data-bs-toggle="tab" href="#cont" aria-selected="false" tabindex="-1" role="tab">Ваш договор</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" data-bs-toggle="tab" href="#jurist" aria-selected="false" tabindex="-1" role="tab">Юридическая работа</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" data-bs-toggle="tab" href="#chat" aria-selected="false" tabindex="-1" role="tab">Чат с менеджером</a>
            </li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade show active" id="profile" role="tabpanel">
                <p>
                    <label>Фамилия</label><input type='text' id='ClFName' name='ClFName' value='<?=$Client->CLFNAME?>'>
                    <label>Имя</label><input type='text' id='ClFName' name='ClFName' value='<?=$Client->CL1NAME?>'>
                    <label>Отчество</label><input type='text' id='ClFName' name='ClFName' value='<?=$Client->CL2NAME?>'>
                </p>
                <p>
                    <label>Дата рождения</label><input type='date' id='ClFName' name='ClFName' value='<?=$Client->CLBIRTHDATE?>'>
                    <label>Место рождения</label><input type='text' id='ClFName' name='ClFName' value='<?=$Client->CLBIRTHPLACE?>'>
                </p>
                <p>
                    <label>Паспорт</label><input type='text' id='ClFName' name='ClFName' value='<?=$ClientPas->CLDOCSER?>'>
                    <label>номер</label><input type='text' id='ClFName' name='ClFName' value='<?=$ClientPas->CLDOCNUM?>'>
                </p>
                <p>
                    <label>СНИЛС</label><input type='text' id='ClFName' name='ClFName' value='<?=$ClientPens->CLDOCSER?>'>
                    <label>ИНН</label><input type='text' id='ClFName' name='ClFName' value='<?=$ClientINN->CLDOCNUM?>'>
                </p>
                <hr class='hr-tab'>
                <p><label>СЕМЕЙНОЕ ПОЛОЖЕНИЕ</label><select name='CLFAMSTATUS'>
                        <option value='<?=$Client->CLFAMSTATUS?>'><?=$Client->CLFAMSTATUS?></option>
                </select></p>
                <p><label>СУПРУГ</label><input type='text' name='CLFAMPARTNAME' value='<?=$Client->CLFAMPARTNAME?>'></p> 
                <p><label>Дата заключения брака</label><input type='date' name='CLMARRIAGEDATE' value='<?=$Client->CLMARRIAGEDATE?>'></p>
                <p><label>Кол-во несовершеннолетних детей</label><input type='text' name='CLCHILDNUM' value='<?=$Client->CLCHILDNUM?>'></p>                    
                <hr class='hr-tab'>
                <p>Адрес регистрации</p>
                <p>
                    <label>ИНДЕКС</label><input type='text' name='CLADRRZIP' value='<?=$Client->CLADRRZIP?>' maxlength=6>
                        <label>РЕГИОН</label><select name='CLADRRREG'>
                            <option value='<?=$Client->CLADRRREG?>'><?=$Client->CLADRRREG?></option>                                                     
                        </select>
                        <label>РАЙОН</label><input type='text' name='CLADRRDIST' value='<?=$Client->CLADRRDIST?>'>
                        </p>
                        <p>
                        <label>ГОРОД</label><input type='text' name='CLADRRCITY' value='<?=$Client->CLADRRCITY?>'>
                        <label>УЛИЦА</label><input type='text' name='CLADRRSTR' value='<?=$Client->CLADRRSTR?>'>
                        </p>
                        <p>
                        <label>ДОМ</label><input type='text' name='CLADRRHOUSE' value='<?=$Client->CLADRRHOUSE?>'>
                        <label>КОРПУС</label><input type='text' name='CLADRRCORP' value='<?=$Client->CLADRRCORP?>'>
                        <label>КВАРТИРА</label><input type='text' name='CLADRRAPP' value='<?=$Client->CLADRRAPP?>'>
                </p>
                <hr class='hr-tab'>
                <p>Адрес фактического проживания</p>
                <p>
                    <label>ИНДЕКС</label><input type='text' name='CLADRRZIP' value='<?=$Client->CLADRFZIP?>' maxlength=6>
                        <label>РЕГИОН</label><select name='CLADRRREG'>
                            <option value='<?=$Client->CLADRFREG?>'><?=$Client->CLADRFREG?></option>                                                     
                        </select>
                        <label>РАЙОН</label><input type='text' name='CLADRRDIST' value='<?=$Client->CLADRFDIST?>'>
                        </p>
                        <p>
                        <label>ГОРОД</label><input type='text' name='CLADRRCITY' value='<?=$Client->CLADRFCITY?>'>
                        <label>УЛИЦА</label><input type='text' name='CLADRRSTR' value='<?=$Client->CLADRFSTR?>'>
                        </p>
                        <p>
                        <label>ДОМ</label><input type='text' name='CLADRRHOUSE' value='<?=$Client->CLADRFHOUSE?>'>
                        <label>КОРПУС</label><input type='text' name='CLADRRCORP' value='<?=$Client->CLADRFCORP?>'>
                        <label>КВАРТИРА</label><input type='text' name='CLADRRAPP' value='<?=$Client->CLADRFAPP?>'>
                </p>
            </div>
            <div class="tab-pane fade" id="anketa" role="tabpanel">
                <p>анкета в разработке</p>
            </div>
            <div class="tab-pane fade" id="cont" role="tabpanel">
                <label>Ваш статус: <?=''?></label><br>
                <label>Дата заключения договора</label><input type='date' id='ContDate' name='ContDate' value=''><br>
                              
            </div>
            <div class="tab-pane fade" id="jurist" role="tabpanel">
                <label>Дата последнего платежа</label><input type='date' id='ContDate' name='ContDate' value=''><br>
                <label>Дата подачи иска в АС</label><input type='date' id='ContDate' name='ContDate' value=''><br>
                <label>Дата определения о введении процедуры реструктуризации</label><input type='date' id='ContDate' name='ContDate' value=''><br>
                <label>Дата завершения процедуры реструктуризации</label><input type='date' id='ContDate' name='ContDate' value=''><br>
                <label>Дата определения о введении процедуры реализации</label><input type='date' id='ContDate' name='ContDate' value=''><br>
                <label>Дата завершения процедуры реализации</label><input type='date' id='ContDate' name='ContDate' value=''><br>  
            </div>
            <div class="tab-pane fade" id="chat" role="tabpanel">
                <?php
                foreach($ClChat as $Message){
                    if ($Message->CTPERS=='client'){
                        $CardType='bg-info';
                    } else {
                        $CardType='bg-success';
                    }
                    echo("
                        <div class='card text-white $CardType mb-3' style='max-width: 50rem;'>
                            <div class='card-header'>$Message->CTPERS</div>
                            <div class='card-body'>                         
                                <p class='card-text'>$Message->CTTEXT</p>
                            </div>
                        </div>
                    ");
                }
                ?>
            </div>
        </div>
        
        
        <script src="js/jquery.min.js"></script>
        
        <script src="js/bootstrap.bundle.min.js"></script>
        
        <script src="js/prism.js" data-manual=""></script>
    </body>
</html>