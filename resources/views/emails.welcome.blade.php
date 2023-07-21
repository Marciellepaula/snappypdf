<!-- resources/views/emails/welcome_email.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Job Opportunities at Our Company</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Job Opportunities at Our Company</h1>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <h4>Position: Web Developer</h4>
                <p>
                    We are looking for an experienced Web Developer to join our team.
                    If you have a strong background in web development and are passionate about creating stunning web experiences, we want to hear from you!
                </p>
                <a href="{{ route('jobs.web_developer') }}" class="btn btn-primary">Apply Now</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <h4>Position: Digital Marketing Specialist</h4>
                <p>
                    Are you a Digital Marketing expert with a proven track record in driving successful marketing campaigns?
                    Join our team and help us reach new heights with your marketing skills!
                </p>
                <a href="{{ route('jobs.digital_marketing') }}" class="btn btn-primary">Apply Now</a>
            </div>
        </div>
        <!-- Add more job listings here if needed -->
    </div>
</body>
</html>
