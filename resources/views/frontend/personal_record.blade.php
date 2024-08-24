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
            border-collapse: collapse;
        }
        td{
            height: 2rem;
            padding-right: 1rem;
            padding-left: 1rem;
        }

        tr {
            border-bottom: 1px solid black;
        }

        .heading{
            width: 100%;
            text-align: center;
        }
        .passport{
            width: 100%;
            text-align: center;
        }

        .head{
            width: 100%;
            text-align: center;
        }
        .passport img{
            border: 2px solid #494646;
            border-radius: 4px;
            padding: 5px;
            width: 5rem;
            height: 5.5rem;
        }

        .page-content{
            border: 2px solid black;
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
                        <img src="{{ public_path('frontend/img/header-image.jpg') }}" width="70" alt="">
                    </div>
                </td>
                <td>
                    <div class="head">
                        <h2>LABONE SENIOR HIGH SCHOOL</h2>
                    </div>
                </td>
                <td>
                    <img src="{{ public_path('frontend/img/header-image.jpg') }}" width="70" alt="">
                </td>
            </tr>
        </table>
      </div>
      <div class="page-body">
        <div class="heading">
            <h3> STUDENT PERSONAL RECORD FORM</h3>
        </div>
        <div class="body-content">
            <div class="passport">
                <img src="{{ public_path('storage/'. $data->photo) }}"  alt="">
            </div>
            <br>
            <div class="content-table">
                <table border="1" class="table">
                    <tr style="background:black">
                        <td colspan="2" style="color:white">STUDENT'S INFORMATION</td>
                    </tr>
                    <tr>
                        <td>Name: {{ $data->placement->name }}</td>
                        <td>Programme: {{ $data->placement->programme->name }}</td>
                    </tr>
                    <tr>
                        <td>Index Number: {{ $data->index }}</td>
                        <td>House Allocated: {{ $data->house->name }}({{ $data->house->color->name }})</td>
                    </tr>
                    <tr>
                        <td>Date of Birth: {{ $data->dob }}</td>
                        <td>Gender: {{ $data->placement->gender->name }}</td>
                    </tr>
                    <tr>
                        <td>Residential Status: {{ $data->placement->status->name }}</td>
                        <td>Track: {{ $data->placement->track }}</td>
                    </tr>
                    <tr>
                        <td>Place of Birth: {{ $data->pob }}</td>
                        <td>Home Town: {{ $data->town }}</td>
                    </tr>
                    <tr>
                        <td>Basic School(JHS): {{ $data->bschool }}</td>
                        <td>Enrollment Code: {{ $data->code }}</td>
                    </tr>
                    <tr>
                        <td>Region: {{ $data->region->name }}</td>
                        <td>District: {{ $data->district->name }}</td>
                    </tr>
                    <tr>
                        <td>Residential Address(GPS): {{ $data->raddress }}</td>
                        <td>Nationality: {{ $data->nationality }}</td>
                    </tr>
                    <tr>
                        <td>Religion: {{ $data->religion->name }}</td>
                        <td>Disability: {{ $data->disability->name }}</td>
                    </tr>
                    <tr style="background:black">
                        <td colspan="2" style="color:white">FATHER'S DATA</td>
                    </tr>
                    <tr>
                        <td>Father's Name: {{ $father->name }}</td>
                        <td>Father's Occupation: {{ $father->occupation->name?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <td>Home Town: {{ $father->town }}</td>
                        <td>Phone Number: {{ $father->number }}</td>
                    </tr>
                    <tr style="background: black"">
                        <td colspan="2" style="color:white">MOTHER'S DATA</td>
                    </tr>
                    <tr>
                        <td>Mother's Name: {{ $mother->name }}</td>
                        <td>Mother's Occupation: {{ $mother->occupation?->name }}</td>
                    </tr>
                    <tr>
                        <td>Home Town: {{ $mother->town }}</td>
                        <td>Phone Number: {{ $mother->number }}</td>
                    </tr>

                </table>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
