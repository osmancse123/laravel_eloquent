<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
         
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div>
                	<ol class="order-list">
                @php
                	$user=App\admin::all();
                @endphp
                	@foreach($user as $row)
                		<li>{{ $row->name }}</li>
                	@endforeach      		
                	</ol>
                </div>

                <div class="links">
                	<table class="table table-border">
                		<thead>
                			<tr>
                				<th>ID</th>
                				<th>Category</th>
                				<th>Name</th>
                				<th>Title</th>
                			</tr>
                		</thead>
                	@foreach($post as $row)
                		<tbody>
                			<tr>
                				<td>{{ $row->admin_id }}</td>
                				<td>{{ $row->category->category_name }}</td>
                				<td>{{ $row->admin->name }}</td>
                				<td>{{ $row->title }}</td>
                			</tr>
                		</tbody>
                	@endforeach
                	</table>
                    
                </div>
            </div>
        </div>
    </body>
</html>
