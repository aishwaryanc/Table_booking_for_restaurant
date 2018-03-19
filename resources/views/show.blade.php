<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Delicious</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="{{asset ('css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset ('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset ('css/style.css')}}">
</head>

<body>
  <section id="contact" class="section-padding">
  <br>
  <div class="col-sm-12 text-center">
  <h1 class="header-h ">Table Booking Details</h1>
  <p class="header-p">At delicious we serve the best taste..Yummy!!</p>
  </div>
  <br><br>
  <div class="container">
  <table class="table">

    <tr>
      <th>Name</th>
      <th>Number</th>
      <th>Email</th>
      <th>Date</th>
      <th>Time</th>
      <th>No Of People</th>
      <th>Message</th>
      <th>Cancel Booking</th>
    </tr>


     @foreach ($user as $user)
      <tr>
      <td>{{ $user -> name }}</td>
      <td>{{ $user -> number }}</td>
      <td>{{ $user -> email }}</td>
      <td>{{ $user -> date }}</td>
      <td>{{ $user -> time }}</td>
      <td>{{ $user -> people }}</td>
      <td>{{ $user -> message }}</td>
      <td><a href='{{ url("/delete/{$user->id}") }}'><button class="btn btn-primary">Cancel</button></a>
        <a href='{{ url("/edit/{$user->id}") }}'><button class="btn btn-success">Edit</button></a></td>
      </tr>
  @endforeach

  </table>
  </div>
  </section>
  </body>
  </html>
