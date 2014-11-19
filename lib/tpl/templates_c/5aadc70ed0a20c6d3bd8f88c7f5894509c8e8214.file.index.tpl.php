<?php /* Smarty version Smarty-3.1.1, created on 2014-11-19 14:16:24
         compiled from "modules/CRUD/tpl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192803668543cd4e3554182-61723628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aadc70ed0a20c6d3bd8f88c7f5894509c8e8214' => 
    array (
      0 => 'modules/CRUD/tpl/index.tpl',
      1 => 1416402053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192803668543cd4e3554182-61723628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_543cd4e3609b1',
  'variables' => 
  array (
    'data' => 0,
    'donnees' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cd4e3609b1')) {function content_543cd4e3609b1($_smarty_tpl) {?>
<script>
//demande confirmation sur click d'un bouton supprimer
$(function() {
	//sur click d'un bouton de suppression
	$('a.glyphicon-remove').click(function(ev){
		//récupérer le href du lien
		//et l'utiliser pour le bouton de confirmation
		$('#go').attr("href",$(this).attr('href'))	

		//afficher la boite de dialogue
		$('#myModal').modal();
	
		//supprimer le comportement par défaut du lien d'origine
		ev.preventDefault();				
	})


//efface les données de la boite de dialogue après affichage
	$('body').on('hidden.bs.modal', '.modal', function () {
    	$(this).removeData('bs.modal');
    });	
	
	
});
</script>


<h2>liste des produits et actions</h2>
	<p class="text-right">
		<a 
								data-toggle="modal" 
						data-target="#inclusionModal" 
						href='?module=CRUD&action=ajouter&displayModuleInDialog=1' class='btn btn-success glyphicon glyphicon-plus'> Ajouter</a>
	</p>
<h3>Liste</h3>
	<table class='table table-striped'>
		<thead>
			<th>id</th><th>Reference</th><th>Actions</th>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['donnees'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['donnees']->_loop = false;
 $_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['donnees']->key => $_smarty_tpl->tpl_vars['donnees']->value){
$_smarty_tpl->tpl_vars['donnees']->_loop = true;
 $_smarty_tpl->tpl_vars['ligne']->value = $_smarty_tpl->tpl_vars['donnees']->key;
?>
			<tr class='table-striped'>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['user_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['first_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['last_name'];?>
</td>
				<td>
					<!--voir le détail-->
					<a class='glyphicon glyphicon-search' 
						data-toggle="modal" 
						data-target="#inclusionModal" 
						href='?module=CRUD&action=detail&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['user_id'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['first_name'];?>
&displayModuleInDialog=1'>
					</a> 				

					<!--modifier-->
					<a class='glyphicon glyphicon-pencil' 
						data-toggle="modal" 
						data-target="#inclusionModal"
						href='?module=CRUD&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['user_id'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['first_name'];?>
&displayModuleInDialog=1'>
					</a>

					<!--supprimer-->
					<a class='glyphicon glyphicon-remove' title='<?php echo $_smarty_tpl->tpl_vars['donnees']->value['first_name'];?>
' 
						href='?module=CRUD&action=supprimer&user_id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['user_id'];?>
&first_name=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['first_name'];?>
'></a>				
				</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['donnees']->_loop) {
?>	
			<tr><td colspan='3'>Aucune donnée</td></tr>
		<?php } ?>
		</tbody>
	</table>
	
	
	
	
	
	
<!-- boite de dialogue confirmation -->
<!-- exemple du site getbootstrap -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
      </div>
      <div class="modal-body">
        Êtes vous sûr de vouloir supprimer l'enregistrement ? 
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-default" data-dismiss="modal">Fermer</a>
        <a href="#" class="btn btn-primary" id='go'>Confirmer</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	
	
<!-- boite de dialogue inclusion-->
<div class="modal fade" id="inclusionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	    Contenu vide remplacé par le module...
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><?php }} ?>