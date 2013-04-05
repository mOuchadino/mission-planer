<h1>Liste des entreprises</h1>

<?php use_stylesheet('jobs.css') ?>

<div id="jobs">

	<?php include_partial('company/list', array('companys' => $pager->getResults())) ?>

	<?php if ($pager->haveToPaginate()): ?>
	  <div class="pagination">
	    <a href="<?php echo url_for('company/index?page='.$pager->getFirstPage()) ?>">
	      <img src="/images/first.png" alt="First page" title="First page" />
	    </a>
	
	    <a href="<?php echo url_for('company/index?page='.$pager->getPreviousPage()) ?>">
	      <img src="/images/previous.png" alt="Previous page" title="Previous page" />
	    </a>

	    <?php foreach ($pager->getLinks() as $page): ?>
	      <?php if ($page == $pager->getPage()): ?>
	        <?php echo $page ?>
	      <?php else: ?>
	        <a href="<?php echo url_for('company/index?page='.$page) ?>"><?php echo $page ?></a>
	      <?php endif; ?>
	    <?php endforeach; ?>

	    <a href="<?php echo url_for('company/index?page='.$pager->getNextPage()) ?>">
	      <img src="/images/next.png" alt="Next page" title="Next page" />
	    </a>	

	    <a href="<?php echo url_for('company/index?page='.$pager->getLastPage()) ?>">
	      <img src="/images/last.png" alt="Last page" title="Last page" />
	    </a>
	  </div>
	<?php endif; ?>

	<div class="pagination_desc">
	  <strong><?php echo count($pager) ?></strong> entreprises

	  <?php if ($pager->haveToPaginate()): ?>
	    - page <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
	  <?php endif; ?>
	</div>

  <div style="padding: 20px 0">
	<hr />
 	<a href="<?php echo url_for('company/new') ?>">Ajouter une entreprise</a>
  </div>
</div>
