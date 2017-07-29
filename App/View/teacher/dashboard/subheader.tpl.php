<header class="sub_header container-fluid">
	<i class="<?php echo $subheader['icon']?>  fa-fw"></i>
	<div class="inline-block">
		<h4><?php echo $subheader['tittle']; ?></h4>
		<p></p>
	</div>

	<?php
		if(!empty($subheader['items'])):
	?>
	<ul class="nav nav-tabs" role="tablist">
		<?php foreach($subheader['items'] as $key => $value): ?>

			<?php if(isset($value['subItem']) && count($value['subItem']) > 0): ?>
				<li role='presentation' class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<?php echo $value['tittle']?>
    					<span class="caret"></span>
    				</a>
    				<ul class="dropdown-menu">
						<?php foreach($value['subItem'] as $item): ?>
							<li>
								<a role="tab" data-toggle="tab" href="#" data-link="<?php echo $item['link']?>"><?php echo $item['tittle']?></a>
							</li>
						<?php endforeach; ?>
    				</ul>
				</li>
			<?php else: ?>
				<li role='presentation' class='<?php echo $value['active']?>'>
				 	<a href='#' data-link='<?php echo $value['link']?>' aria-controls='' role='tab' data-toggle='tab'>
					 	<?php echo $value['tittle']?>
				 	</a>
				</li>
			<?php endif; ?>
			
		<?php endforeach; ?>
	</ul>

	<?php
		endif;
    ?>
</header>

<div>


<?php
    if(!empty($subheader['options']['items'])):

        extract($subheader['options']['form']);
        $button = $subheader['options']['button'];
?>
    <div class="container">

        <form action="<?=$action?>" method="<?=$method?>">
            <div class="form-group" id="gruposCheckbox">
                <input type="submit" value="<?=$button['value']?>" class="<?=$button['class']?>">
                <label  class="radio-inline">
                    <input type="checkbox" name=""> <?=$button['checkbox']['title']?>
                </label>

                <?php foreach($subheader['options']['items'] as $key => $value): ?>
                    <label class="radio-inline">
                        <input type="checkbox" id="idcheckAreas" name=""> <?=$value['title']?>
                    </label>
                <?php endforeach; ?>
            </div>
        </form>


    </div>
<?php
    endif;
?>
</div>