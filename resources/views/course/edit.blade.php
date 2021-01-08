@extends('layouts.app')

@section('content')
    <div class="container">
        <section id="course_create" class="shadow" style="border-radius: 1rem">
            <div class="container">
                <br>
                <h1 style="text-align: center">Edit Course</h1>
                <hr>
                <form action="/course/{{ $course->id }}" id="update" method="post">
                    @method('patch')
                    @csrf
                    <div class="form">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="{{ $course->id }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Course Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $course->name }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description"
                                name="description">{{ $course->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="mentor">Mentor</label>
                            <input type="text" class="form-control" id="mentor" name="mentor" value="{{ $course->mentor }}">
                        </div>
                        <div class="form-group">
                            <label for="place">Place</label>
                            <input type="place" class="form-control" id="place" name="place" value="{{ $course->place }}">
                        </div>
                        <div class="form-group">
                            <label for="date">Date Started</label>
                            <input type="date" class="form-control datepicker" id="date" name="date"
                                value="{{ $course->date }}">
                        </div>
                        <div class="form-group">
                            <label for="time">Time Started</label>
                            <input type="time" class="form-control timepicker" id="time" name="time"
                                value="{{ $course->time }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price " value="{{ $course->price }}">
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <label for="photo">Select a photo</label>
                                <input type="file" class="form-control" id="photo" name="photo"
                                    value="{{ $course->photo }}">
                            </div>
                        </div>
                        <br>
                    </div>
                    <button href="submit" class="btn btn-dark">Submit</button>
                    <a href="{{ url('/course') }}" class="btn btn-danger">Back</a>
                </form>
                <br>
            </div>
        </section>
    </div>
@endsection
