<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paystack Payment</title>
</head>
<body>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
     <div class="text-danger">
         {{ $error }}
     </div>
    @endforeach
    @endif
    <form action="{{ route('pay') }}" method="POST">
        @csrf
        <h2>Start payment</h2>
        <input type="hidden" name="email" value="wonder@gmail.com">
        <input type="hidden" name="amount" value="30">
        <input type="hidden" name="index"  value="1055545445">
        <button type="submit">pay now</button>
    </form>
</body>
</html>
