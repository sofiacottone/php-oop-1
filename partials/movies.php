<div class="container mt-4">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">
        <?php foreach ($movies as $movie) { ?>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie->title; ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $movie->year . ' - ' . $movie->duration;; ?></h6>
                        <div class="card-text">Directed by: <?php echo $movie->director; ?></div>
                        <div class="card-text">Original Language: <?php echo $movie->original_language; ?></div>
                        <div class="card-text">Genre: <?php echo implode(', ', $movie->genre); ?></div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>