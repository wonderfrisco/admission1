<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Admisssion Letter</title>

    <link rel="stylesheet" />
    <style>


      .page-header {
        text-align: center;
        text-transform: uppercase;
        line-height: 0px
      }
      .page-header h3 {
        font-size: 2rem;
      }
      .page-header h4 {
        font-size: 1.2rem;
      }
      .page-header h5 {
        font-size: 1rem;
      }
      .page-body{

      }
      .std-name{
        text-transform:initial;
      }
      table{
        width: 100%;
      }

      .offer h3{
        text-transform: uppercase;
      }
      .offer {
        text-align: center;
      }
      .inform p span{
        font-weight: bold;

      }
      .inform {
        margin-bottom: -1.1rem;

      }
      .page-content{
        padding:1.5rem 3rem;
        border: 2px solid black;
        margin: -1.2rem -1.2rem;
        height: 63.5rem;
      }
      .reporting p span{
        font-weight: bold;
      }
      .reporting{
        margin-bottom: 2rem;
      }
      .sign img{
        width: 9rem;

      }

      .sign{
        margin-top: -2rem;
      }

      .faith{
        line-height: 2rem;
      }
      .watermark{
        background-image: url('../public/frontend/img/watermark5.png');

        background-repeat: no-repeat;
        background-position: center;
        background-size: 70%;
      }

    </style>
  </head>
  <body>
    <div class="page-content">
      <div class="page-header">
        <h3>Labone senior high school</h3>
        <h4>(ghana education service)</h4>
        <h5>P. O. BOX 079 OSU-ACCRA</h5>
        <div class="table">
          <table>
            <tr>
              <td>
                <p>Tel. 0302-788728</p>
                <p>Our Ref.: LBSS/A42/09/24</p>
              </td>
              <td>
                <div class="logo">
                     <img src="{{ public_path('frontend/img/header-image.jpg') }}" width="100" alt="">

                </div>
              </td>
              <td>
                <p>BOX 079,</p>
                <p>OSU - ACCRA,</p>
                <p>GHANA</p>
                <p>Date: March 25, 2024</p>
              </td>
            </tr>
          </table>
          <hr>
        </div>
      </div>
      <div class="page-body">
        <div class="dear">
            <p>Dear Parent/Guardian </p>
        </div>
        <div class="offer">
            <h3><u>offer of admission into labone Senior High school - 2024/2025 academic year</u></h3>
        </div>
        <div class="watermark">
            <div class="inform">
                <p> I am pleased to inform you that your ward <span>{{ $data->placement->name }}</span> with index number <span>{{ $data->index }}</span> has been offered admission to the  <span>LABONE SENIOR HIGH SCHOOL</span> for a 3-year FREE Senior High School programme in  <span>{{ $data->placement->programme->name }}</span>  with effect from <u>24th September, 2024</u> for the 2024/2025 academic year.</p>
            </div>
            <div class="reporting">

                <p>He/She will be required adhere to and obey ALL the rules and regulations of the school and to put up execellence academic performace in all subjects(A1 - C6) in all <i>terminal examinations</i>.  </span></p>
                <p><i>If you accept this offer, please complete the information</i> below and sumbit the form to the school to facilitate the admission process</p>

                <p>Please attach photocopies of <span>RESULTS SLIP, BIRTH
                    CERTIFICATE/BAPTISMAL CERTIFICATE/GHANA CARD, NHIS CARD (RENEWED) COMPLETED PLACEMENT FORM AND ENROLMENT FORM,
                    and TWO (2) PASSPORT SIZE PICTURES of your ward. </span></p>
            </div>
        </div>
        <div class="faith">
            <p>Congratulations!</p>
            <p>Yours faithfully,</p>
        </div>
        <div class="sign">
            <img src="{{ public_path('frontend/img/signature2.png') }}" width="100" alt="">
        </div>
      </div>
    </div>
  </body>
</html>
