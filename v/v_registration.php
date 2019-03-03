<div><?php echo $title?>
    <form method="post" >
                        <ul>
                            <li>
                                    <label for="name">���:</label>
                                    <input type="text" name="name" min='5' placeholder="���" required />
                                </li>
                                <li>
                                    <label for="login">Л�����:</label>
                                    <input type="email" max='30' name="login" placeholder="�����" required />
        </li>
                                <li>
                                    <label for="call">�������:</label>
                                    <input type="number" name="call" min='10'  placeholder="�������" required />
        </li>
                    <li>
                                    <label for="passwd">������:</label>
                                    <input type="number" name="passwd" min='10'  placeholder="������" required />
        </li>
                                <li>
                                    <label for="capcha">Проверка</label>
                                    <img src="../engine/captcha.php" alt="" style='margin-top:15px;margin-left:25px'>
                                    <input type="text" min='5' name="captcha" style='margin-top:5px;margin-left:90px' required />
                                </li>
                        <button class="submit_call" type="submit"  name='ok'>Регистрация</button>
                        </ul>
    </form>
</div>