@extends('layout')
@section('content')

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container1 {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        #h1 {
            color: #333;
        }
        #h2 {
            color: #666;
        }
        #img1 {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
 <div class="container1">
        <h1 id="h1">Name: Patel Tanvi Bharatkumar</h1>
        <h2 id="h2">University: ITM (SLS) Baroda University</h2>
        <img id="img1" src="images/ITM-SLS-Baroda-University.png" alt="ITM (SLS) Baroda University"> 
        <h1 id="h1">Department: Btech</h1>
        <h1 id="h1">Branch: IT</h1>
        <h2 id="h2">Semester: 4</h2>
        <h2 id="h2">Enrollement no: 22C25015</h2>
    </div>


@stop