<?php
/* Smarty version 3.1.39, created on 2021-04-27 09:46:07
  from 'E:\xampp\htdocs\Projekt-8\app\views\ResultView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6087c13fc65414_35784038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bb2cf15ccda7683c02d1a986d965c70d3387637' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Projekt-8\\app\\views\\ResultView.tpl',
      1 => 1619509565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6087c13fc65414_35784038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5414050406087c13fc4f3b4_11344079', 'logout');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19758329786087c13fc537b8_74190785', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'logout'} */
class Block_5414050406087c13fc4f3b4_11344079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'logout' => 
  array (
    0 => 'Block_5414050406087c13fc4f3b4_11344079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
" class="button">Wróć!</a>
<?php
}
}
/* {/block 'logout'} */
/* {block 'content'} */
class Block_19758329786087c13fc537b8_74190785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19758329786087c13fc537b8_74190785',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table class="table-wrapper">
        <tr>
            <td>Kwota</td>
            <td>Lata</td>
            <td>Procent</td>
            <td>Rata</td>
            <td>Data</td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value["kwota"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value["lat"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value["procent"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value["rata"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value["data"];?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'mess');
$_smarty_tpl->tpl_vars['mess']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mess']->value) {
$_smarty_tpl->tpl_vars['mess']->do_else = false;
?>
        <h3 style="color:red;"><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</h3>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php
}
}
/* {/block 'content'} */
}
