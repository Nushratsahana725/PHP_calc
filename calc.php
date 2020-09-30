<html>
    <head><h1>Calculator</h1>
        <title>calculator</title>
        <script>
          function insert(num){
              document.form.textview.value =document.form.textview.value+num;
          }
          function clean(){
              document.form.textview.value="";
          }
          function equal(){
              var exp=document.form.textview.value;
              if(exp){
                  document.form.textview.value=eval(exp)
              }
          }
        function back(){
            var exp=document.form.textview.value;
            document.form.textview.value=exp.substring(0,exp.length-1);
        }
        </script>
        <style>
        *{
            margin:0;
            padding:0;
        }
        .button{
            width:50px;
            height:50px;
            font-size:30;
            cursor:pointer;
            margin:2;
            background:black;
            color:white;
        }
        .textview{
            width:220px;
            margin:5px;
            height:30px;
            font-size:25;
            padding:5px;
        }
        .main{
            position:absolute;
            top:50%;
            left:50%;
            transform:translateX(-50%) translateY(-50%)
        }
        #bg{
            background:linear-gradient(to right,rgb(255,0,0),rgb(0, 0, 255));
            height:100%;
        }
        </style>
    </head>
<body>
    <div id="bg"></div>
    <div class="main">
        <form name="form">
            <input class="textview" name="textview">
        </form>
    <table>
     <tr>
         <td><input class="button" type="button" value="C" onclick="clean()"></td>
         <td><input  class="button" type="button" value="<"onclick="back()"></td>
         <td><input class="button" type="button" value="/" onclick="insert('/')"></td>
         <td><input class="button" type="button" value="x" onclick="insert('*')"></td>
     </tr>
     <tr>
            <td><input class="button" type="button" value="7" onclick="insert(7)"></td>
            <td><input class="button" type="button" value="8" onclick="insert(8)"></td>
            <td><input class="button" type="button" value="9" onclick="insert(9)"></td>
            <td><input class="button" type="button" value="-" onclick="insert('-')"></td>
        </tr>
        <tr>
                <td><input class="button" type="button" value="4" onclick="insert(4)"></td>
                <td><input class="button" type="button" value="5" onclick="insert(5)"></td>
                <td><input class="button" type="button" value="6" onclick="insert(6)"></td>
                <td><input class="button" type="button" value="+" onclick="insert('+')"></td>
            </tr>
            <tr>
                    <td><input class="button" type="button" value="1" onclick="insert(1)"></td>
                    <td><input class="button" type="button" value="2" onclick="insert(2)"></td>
                    <td><input class="button" type="button" value="3" onclick="insert(3)"></td>
                    <td rowspan="2"><input class="button" style="height:110;" type="button" value="=" onclick="equal()"></td>
                </tr>
                <tr>
                        <td colspan="2"><input class="button" style="width:110;" type="button" value="0" onclick="insert(0)"></td>
                        <td><input class="button" type="button" value="." onclick="insert('.')"></td>
                    </tr>
    </table>
    </div>
</body>
<footer>
  <p>creator:Nushrat sahana</p>
</footer>
    </html>