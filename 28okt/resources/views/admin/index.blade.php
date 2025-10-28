<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>My Projects</h1>
        <div class="projects">
            @foreach($projects as $project)
            <div class="project">
                <h2>{{ $project->title }}</h2>
                <img src="{{ $project->image_url }}" alt="{{ $project->title }}" style="max-width: 300px;">
                <p>{{ $project->description }}</p>
                <p><strong>Tech Stack:</strong> {{ $project->tech_stack }}</p>
                <a href="{{ $project->project_url }}" target="_blank">View Project</a>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>