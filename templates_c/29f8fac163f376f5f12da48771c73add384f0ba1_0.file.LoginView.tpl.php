<?php
/* Smarty version 3.1.39, created on 2021-04-26 21:02:25
  from 'E:\xampp\htdocs\Projekt-8\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60870e41d1ec67_84121228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29f8fac163f376f5f12da48771c73add384f0ba1' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Projekt-8\\app\\views\\LoginView.tpl',
      1 => 1617451727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60870e41d1ec67_84121228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154966327160870e41d0f3d9_68382767', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_154966327160870e41d0f3d9_68382767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_154966327160870e41d0f3d9_68382767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_root;?>
login" method="post" class="pure-form pure-form-stacked">
            <fieldset>
                <label>Proszę podać login:</label>
                <input type="text" name="login" placeholder="login"></input>
                <label>Prosze podać hasło:</label>
                <input type="password" name="password"></input>
                <input type="submit" value="Zaloguj się!" class="pure-button pure-button-primary"></input>
            </fieldset>
        </form>
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
