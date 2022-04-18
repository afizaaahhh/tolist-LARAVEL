<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel ToDo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <!-- Styles -->
        <style>
            body{
                background: #f1f1f1;
                /* color: #636b6f; */
                font-family: 'Raleway', sans-serif;
                font-size: 18px;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                
            }

            .heading{
                width: 50%;
                margin: 30px auto;
                text-align: center;
                color: 	#123456;
                /* font-family: 'Raleway', sans-serif; */
                font-size: 40px;
            }

            .container{
                margin: 20px auto;
                background-color: #eceff0;
                width: 100%;
                max-width: 1100px;
                padding: 20px;
                border-radius: 25px;
                box-shadow: 3px 3px 0 rgba(0,0,0, .1);
                box-sizing: border-box;
            }

            table {
                width: 50%;
                margin: 20px auto;
                border-collapse: collapse;
            }

            tr {
                border-bottom: 1px solid #cbcbcb;
            }

            th {
                font-size: 19px;
                color: #151B54;
            }

            th, td{
                border: none;
                height: 30px;
                padding: 1px;
            }

            tr:hover {
                background: #E9E9E9;
            }
            form {
                width: 50%; 
                margin: 30px auto; 
                border-radius: 5px; 
                padding: 10px;
                /*background: #FFF8DC;*/
                /*border: 1px solid #6B8E23;*/
            }

            form p {
                color: red;
                margin: 0px;
            }

            .input_task {
                /*margin-left: 100px;*/
                margin: 0;
                border: none;
                border-radius: 0;
                width: 85%;
                padding: 10px;
                float: left;
                font-size: 16px;
            }

            .add_btn {
                margin-left: 5px;
                padding: 10px;
                width: 10%;
                background: #d9d9d9;
                color: #555;
                float: left;
                text-align: center;
                font-size: 13px;
                cursor: pointer;
                transition: 0.3s;
                border-radius: 0;
            }

            .add_btn:hover {
                background-color: #2C3539;
                color: white;           
                
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;             
                text-decoration: none;
                
            }
            /* .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            } */

            /* .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            } */

            /* .title {
                font-size: 84px;
            } */

            /* .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }  */
        </style>
    </head>
    <body>
       
        <div class="container">
            <!-- HEADER -->
            <div class="heading">        
                <h2>MY TO DO LIST</h2>
            </div>

            <form action="savelist" class="input_form">
                <input type="text" name="task" class="input_task" placeholder="What to do?">
			    <button type="submit" name="submit" id="add_btn" class="add_btn" ><i class="fa fa-plus" style="font-size:15px"></i></button>
            </form>
            <br>
            <table>
                <tr>
                    <th style="padding-right: 15%;">No.</th>
                    <th style="text-align: center;">Tasks</th>
                    <!-- <th>Created At</th> -->
                    <th style="width:50px;">Action</th>
                </tr>
            @php $i = 1; @endphp
                @foreach ($todo_arr as $td)                    
                    <tr>                     
                        <td>{{$i}}</td>
                        <td>{{$td->taskname}}</td>
                        <!-- <td>{{$td->created_at}}</td> -->
                        <td><a href="delete/{{$td->id}}"><i class="fa fa-trash-o"></i></a> | <a href="edit/{{$td->id}}"><i class="fa fa-edit"></i> </a></td>
                        
                    </tr>
                    @php $i++; @endphp
                @endforeach
            </table>
        </div>
    </body>
</html>
