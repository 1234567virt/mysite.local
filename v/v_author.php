<div class="admin">
    <style>
    .admin{
     
        margin:41px 400px;
    width: 500px;
    height: 408px;
    border:1px solid White; 
    border-radius:6px;
    background:white;
    font-size:16px;
    font-family: 'Times New Roman';
}
input[type=password]{
    width: 257px;
    height:43px;
    border-radius:6px;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    margin:10px 50px;
}
input[type=email]{
    width: 257px;
    height:43px;
    border-radius:6px;
    margin:10px 3px;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);  
}
ul{
  list-style:none;  
}
label{
    margin-left:15px;
}
#ok{
    width: 140px;
    height:40px;
    border-radius:6px;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    margin:10px 159px; 
    background:#b40006;
    color:white;
    font-size:18px;
    border:0px solid transparent;

}
    </style>
<form  method="post" >
    <ul>
        <li>
            <label for="login">Пользователь:</label>
            <input type="email" name="login" min='5' placeholder="User" required />
        </li>
        <li>
             <label for="password">Пароль:</label>
             <input type="password" max='30' name="passwd" placeholder="Password" required />
        </li>
        <li><a href="" style="font-size:12px;margin-left:80px">Востановить пароль</a></li>
        <li>
             <button type="submit"  id='ok' name='ok'>Ok</button>
        </li>
    </ul>
        </form>
        </div>