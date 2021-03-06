<h2>Latest projects</h2>

<ul class="teaser cf">
  <?php foreach(page('projects')->children()->visible()->limit(3) as $project): ?>
  <li>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <p><?php echo $project->text()->excerpt(80) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
        <amp-img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html();?>" height="176" width="264" ></amp-img>
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
