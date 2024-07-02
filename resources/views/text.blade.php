<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Réseau Social - NavTabs</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-facebook-tab" data-bs-toggle="tab" data-bs-target="#nav-facebook" type="button" role="tab" aria-controls="nav-facebook" aria-selected="true">Facebook</button>
    <button class="nav-link" id="nav-twitter-tab" data-bs-toggle="tab" data-bs-target="#nav-twitter" type="button" role="tab" aria-controls="nav-twitter" aria-selected="false">Twitter</button>
    <button class="nav-link" id="nav-instagram-tab" data-bs-toggle="tab" data-bs-target="#nav-instagram" type="button" role="tab" aria-controls="nav-instagram" aria-selected="false">Instagram</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-facebook" role="tabpanel" aria-labelledby="nav-facebook-tab">
    Contenu de Facebook
  </div>
  <div class="tab-pane fade" id="nav-twitter" role="tabpanel" aria-labelledby="nav-twitter-tab">
    Contenu de Twitter
  </div>
  <div class="tab-pane fade" id="nav-instagram" role="tabpanel" aria-labelledby="nav-instagram-tab">
    Contenu de Instagram
  </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
