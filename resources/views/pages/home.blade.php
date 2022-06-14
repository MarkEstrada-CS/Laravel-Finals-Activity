@extends('layouts.default')

@section('content')

<head>
  <title>Mark Estrada</title>

  <style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

body {
    background-color: #a4508b;
    background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);
    font-family: roboto;
    background-repeat: no-repeat;
    background-size: auto;
}

#box1
{
  width:850px;
  height:480px;
  background-color: #fff;
  margin: auto;
  margin-top: 20px;
  border-radius: 15px;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}

#box1 h1
{
  padding-top: 40px;
  text-align: center;
  font-weight: bolder;
  color: #b52121;
  font-size: 50px;
}

#box1 p
{
  text-align: left;
  padding-left: 40px;
  padding-right: 40px;
  font-weight: bold;
  font-size: 20px;
  text-align: justify;
}

#box2
{
  width:850px;
  height: auto;
  background-color: #fff;
  margin: auto;
  margin-top: 20px;
  border-radius: 15px;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}

#box2 h1
{
  padding-top: 40px;
  text-align: center;
  font-weight: bolder;
  color: #b52121;
  font-size: 50px;
}

#box2 h2
{
  margin-top: -20px;
  text-align: center;
  font-weight: bolder;
  color: #2134b5;
  font-size: 40px;
}

#box2 h3
{
  margin-top: -20px;
  text-align: center;
  font-weight: bolder;
  font-size: 30px;
}

#box2 p
{
  margin-top: -15px;
  text-align: left;
  padding-left: 40px;
  padding-right: 40px;
  font-weight: bold;
  font-size: 20px;
  padding-bottom: 50px;
  text-align: justify;
}

#box3
{
  width:850px;
  height:auto;
  background-color: #fff;
  margin: auto;
  margin-top: 20px;
  border-radius: 15px;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}

#box3 h1
{
  padding-top: 40px;
  text-align: center;
  font-weight: bolder;
  color: #b52121;
  font-size: 50px;
}

#box3 p
{
  text-align: left;
  padding-left: 40px;
  padding-right: 40px;
  font-weight: bold;
  font-size: 20px;
  padding-bottom: 50px;
  text-align: center;
}
  </style>

</head>

<body>
<div id="box1">
        <h1>ABOUT ME</h1>
        <p>My name is Mark Vincent R. Estrada. Im 21 years old. I live in Pasig City. I'm currently studying at Pamantasan ng Lungsod ng Pasig taking the Computer Science Program.<br><br>

            I'm a quiet person and likes to observe people. I'm lazy and absent-minded at times. I tend to forget things easily nowadays and I don't really go outside even if it's not pandemic.<br><br>

            My hobbies are watching youtube videos, animes, reading manga/manhwa, reading light novels and playing mobile games.<br><br>

            I like Hololive Vtubers, staying indoors, modifying phones such as unlocking bootloader and flashing roms. I dislike horror, the ocean, poisonous insects and some vegetales.</p>
      </div>

      <div id="box2">
        <h1>My Favorite Lessons</h1>
        <h2>CS405: OSPF</h2>
        <h3>INTRODUCTION TO LARAVEL</h3>
        <p>Laravel is an open-source web MVC framework for PHP.

            Laravel is a robust framework that provides easy development of PHP web applications
            with features like a modular packaging system with a dedicated dependency manager,
            access to relational databases, and other utilities for application deployment and
            maintenance.

            Laravel is a web application framework with expressive, elegant syntax. A
            web framework provides a structure and starting point for creating your
            application, allowing you to focus on creating something amazing while we
            sweat the details.

            Laravel strives to provide an amazing developer experience, while providing
            powerful features such as thorough dependency injection, an expressive
            database abstraction layer, queues and scheduled jobs, unit and integration
            testing, and more.
          </p>

        <h2>CS202: PDP</h2>
        <h3>GITHUB</h3>
        <p>GitHub is a code hosting platform for version control and collaboration. It lets you and
            others work together on projects from anywhere.

            Github is a web-based platform used for version control. Git simplifies the process of
            working with other people and makes it easy to collaborate on projects.

            Team members can work on files and easily merge their changes in with the master
            branch of the project.

            Git & GitHub skill has slowly made its way from preferred skills to must have skills in
            multiple job roles.
          </p>
      </div>

      <div id="box3">
        <h1>6 YEARS FROM NOW</h1>
        <p>6 years from now, I see myself as a game developer, not yet expert but beginner level game developer.</p>

</body>
</html>

@stop
