@extends('layout')
@section('content')

<style>
            .container d-flex align-item-center{
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #f8f9fa;
            }
            .card{
                margin: auto;
                padding: 20px;
                width: 50%;
                border: 1px solid #000;
            }
            .top-header {
                padding: 15px;
                margin-bottom: 50px;
                background: #1abc9c;
                color: white;
                display: flex; 
                justify-content: space-between; 
                align-items: center; 
            }
            a {
                text-decoration: none; 
                color: white;
                padding: 10px;
            }
        </style>
        <br>
        <br>
<div class="container d-flex align-item-center">
            <div class="card">
                <h1>Add Assignments</h1>
                <form action="/addassign" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col">
                        <p>Title</p>
                        <input type="text" name="title" class="form-control" placeholder="Enter Title">
                    </div>
                    <br>
                    <div class="col">
                        <p>Subject Name</p>
                        <input type="text" name="subname" class="form-control" placeholder="Enter Subject name"> 
                    </div>
                    <br>
                    <div class="col">
                        <p>Faculty Name</p>
                        <input type="text" name="facname" class="form-control" placeholder="Enter Faculty name"> 
                    </div>
                    <br>
                    <div class="col">
                        <p>Assignment file</p>
                        <input type="file" name="sn" class="form-control"> 
                    </div>
                    <br><div class="col">
                        <p>Date of Submission</p>
                        <input type="date" name="date" class="form-control">
                    </div>
                    <br>
                    <div class="text-center">
                        <input type="submit" class="btn btn-success" name="add" value="Add">
                    </div>    
                </form>
            </div>
        </div>
        <br>
        <br>

@stop