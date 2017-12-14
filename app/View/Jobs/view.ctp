	
	<h3><?php echo $job['Job']['title'] ;?></h3>
		 <ul>
		   <li><strong>Location:</strong> <?php echo $job['Job']['city'] ;?>, <?php echo $job['Job']['state'] ;?></li>
		   <li><strong>Job type:</strong><?php echo $job['Type']['name'] ;?></li>
		   <li><strong>Description:</strong> <p><?php echo $job['Job']['description'] ;?></p></li>
		   <li><strong>Contact email:</strong><a href="<?php echo $job['Job']['contact_email'] ;?>"><?php echo $job['Job']['contact_email'] ;?></a></li>
		 </ul>
     <p><a href="<?php echo $this->webroot;?>jobs">Back to jobs</a></p>
	 
	<?php if($userData['id']== $job['Job']['user_id']):?> 
		<br><br>
		<?php echo $this->Html->link('Edit', array('action'=>'edit', $job['Job']['id']));?> |
			<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $job['Job']['id']), array('confirm'=>'Are you sure?'));?>
	<?php endif;?>