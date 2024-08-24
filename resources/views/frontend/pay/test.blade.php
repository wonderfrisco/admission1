<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Admisssion Letter</title>

    <link rel="stylesheet" />
    <style>
        table {
            width: 100%;
        }

        .heading{
            width: 100%;
            text-align: center;
        }
        .passport{
            width: 100%;
            height: 10rem;
            text-align: center;
        }

        .head{
            width: 100%;
            text-align: center;
        }
    </style>
  </head>
  <body>
    <div class="page-content">
      <div class="page-header">
        <table>
            <tr>
                <td>
                    <div class="logo">

                    </div>
                </td>
                <td>
                    <div class="head">
                        <h1>LABONE SENIOR HIGH SCHOOL</h1>
                    </div>
                </td>
                <td>

                </td>
            </tr>
        </table>
        <hr>
      </div>
      <div class="page-body">
        <div class="heading">
            <h3> STUDENT PERSONAL RECORD FORM</h3>
        </div>
        <div class="body-content">
            <div class="passport">
                <img src="{{ public_path('storage/'. $data->photo) }}" width="70" alt="">
            </div>

        </div>
      </div>
    </div>
  </body>
</html>
