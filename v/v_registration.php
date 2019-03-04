<?php //  echo $title;?>
 
<h1>Регистрация</h1>
            <div class="content_half float_l">
               
                <div id="contact_form">
                   <form method="post" action="index.php?c=user&act=registration">
                        
                        <label for="name">Имя:</label> <input type="text" id="author" name="name" class="required input_field" min='5' placeholder="ФИО" required />
                        <div class="cleaner h10"></div>
                        <label for="login">Email:</label> <input type="email" id="email" class="validate-email required input_field" max='30' name="login" placeholder="User" required  />
                        <div class="cleaner h10"></div>
                        
                        <label for="call">Телефон:</label> <input type="number" name="call" id="phone" class="validate-email required input_field" placeholder="Телефон" required />
                        <div class="cleaner h10"></div>
        
                        <label for="passwd">Пароль:</label> <input id="text" name="paswd" type="password" class="validate-email required input_field" placeholder="Пароль" required >
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" class="submit_btn" name="ok" id="submit" value="Зарегистрироваться" />
                        
                    </form>
                </div>
            </div>

