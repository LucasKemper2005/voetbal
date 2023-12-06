<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
<div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background-color: #007bff; color: #fff;">
                <h4 class="text-center">Login</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Gebruikersnaam</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Wachtwoord</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Rol</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="admin" value="admin">
                            <label class="form-check-label" for="admin">
                                Beheerder
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="user" value="user" checked>
                            <label class="form-check-label" for="user">
                                Gebruiker
                            </label>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" style="background-color: #007bff;">Login</button>
                    </div>
                </form>
				<div class="text-center mt-3">
                    <p>Heb je nog geen account registeer dan<a href="register.php" class="text-decoration-none"> hier</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
