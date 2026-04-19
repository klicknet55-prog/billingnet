<?php
/* Smarty version 4.5.3, created on 2026-04-16 01:16:23
  from '/var/www/html/phpnuxbill/ui/ui/admin/plan/invoice-print.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69dfd5f75485e1_19438596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '157967b57136ba32fc6fb86f8743278180dc0aa4' => 
    array (
      0 => '/var/www/html/phpnuxbill/ui/ui/admin/plan/invoice-print.tpl',
      1 => 1763342386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69dfd5f75485e1_19438596 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/ui/ui/images/favicon.ico">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 10px;
        }

        .invoice {
            width: 100%;
            max-width: 70mm;
            /* Maximum width for thermal printing */
            background: white;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        .header h1 {
            margin: 0;
            font-size: 14px;
            font-weight: bold;
        }

        .details {
            margin-bottom: 10px;
            border-bottom: 2px solid #0056b3;
            padding-bottom: 5px;
            text-align: left;
        }

        .details div {
            margin: 5px 0;
            font-weight: bold;
            /* Bold text for details */
            color: black;
            /* Ensure text is black */
        }

        .invoice-info {
            margin: 10px 0;
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-info th,
        .invoice-info td {
            padding: 5px;
            text-align: left;
            color: black;
            /* Ensure text is black */
            font-weight: bold;
            /* Bold text for table content */
        }

        .invoice-info th {
            background-color: #0056b3;
            color: white;
        }

        .footer {
            margin-top: 10px;
            text-align: left;
            /* Align footer text to left */
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
                font-size: 12px;
            }

            .invoice {
                width: 70mm;
                /* Fixed width for thermal printer */
                padding: 5px;
                /* Reduced padding for print */
                box-shadow: none;
                /* Remove shadow for clearer print */
                border: none;
                /* Remove border for print */
            }

            .details {
                margin-bottom: 5px;
                text-align: left;
            }

            .invoice-info {
                border-collapse: collapse;
            }

            .invoice-info th,
            .invoice-info td {
                padding: 5px;
                /* Reduced padding */
                text-align: left;
                font-weight: bold;
                /* Bold text for print */
                color: black;
                /* Ensure text is black */
                border: none;
                /* Remove borders for print */
            }

            hr {
                border: 1px solid #000;
                /* Darker line for print */
            }

            .btn {
                display: none;
                /* Hide buttons when printing */
            }
        }
    </style>
    <?php echo '<script'; ?>
 type="text/javascript">
        function printpage() {
            window.print();
        }
    <?php echo '</script'; ?>
>
</head>

<body <?php if (!$_smarty_tpl->tpl_vars['nuxprint']->value) {?> onload="printpage()" <?php }?>>
    <div class="container">
        <div class="invoice">
            <?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
                <pre style="border-style: none; background-color: white;"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</pre>
            <?php } else { ?>
                <div class="header">
                    <h1><?php echo Lang::pad($_smarty_tpl->tpl_vars['_c']->value['CompanyName'],' ',2);?>
</h1>
                    <p><?php echo Lang::pad($_smarty_tpl->tpl_vars['_c']->value['address'],' ',2);?>
 | <?php echo Lang::pad($_smarty_tpl->tpl_vars['_c']->value['phone'],' ',2);?>
</p>
                </div>
                <div class="details">
                    <div><strong><?php echo Lang::pad(Lang::T('Invoice'),' ',2);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['in']->value['invoice'];?>
</div>
                    <div><strong><?php echo Lang::pad(Lang::T('Date'),' ',2);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</div>
                    <div><strong><?php echo Lang::pad(Lang::T('Sales'),' ',2);?>
:</strong> <?php echo Lang::pad($_smarty_tpl->tpl_vars['_admin']->value['fullname'],' ',2);?>

                    </div>
                </div>

                <table class="invoice-info">
                    <tr>
                        <th><?php echo Lang::pad(Lang::T('Type'),' ',2);?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['in']->value['type'];?>
</td>
                    </tr>
                    <tr>
                        <th><?php echo Lang::pad(Lang::T('Package Name'),' ',2);?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['in']->value['plan_name'];?>
</td>
                    </tr>
                    <tr>
                        <th><?php echo Lang::pad(Lang::T('Package Price'),' ',2);?>
</th>
                        <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['in']->value['price']);?>
</td>
                    </tr>
                    <tr>
                        <th><?php echo Lang::pad(Lang::T('Username'),' ',2);?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['in']->value['username'];?>
</td>
                    </tr>
                    <tr>
                        <th><?php echo Lang::pad(Lang::T('Password'),' ',2);?>
</th>
                        <td>**********</td>
                    </tr>
                    <tr>
                        <th><?php echo Lang::pad(Lang::T('Payment Method'),' ',2);?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['in']->value['method'];?>
</td>
                    </tr>
                    <?php if ($_smarty_tpl->tpl_vars['in']->value['type'] != 'Balance') {?>
                        <tr>
                            <th><?php echo Lang::pad(Lang::T('Created On'),' ',2);?>
</th>
                            <td><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['in']->value['recharged_on'],$_smarty_tpl->tpl_vars['in']->value['recharged_time']);?>
</td>
                        </tr>
                        <tr>
                            <th><?php echo Lang::pad(Lang::T('Expires On'),' ',2);?>
</th>
                            <td><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['in']->value['expiration'],$_smarty_tpl->tpl_vars['in']->value['time']);?>
</td>
                        </tr>
                    <?php }?>
                </table>

                <hr style="border: 2px solid #0056b3; margin-top: 10px;">

                <div class="footer">
                    <p><?php echo Lang::pad($_smarty_tpl->tpl_vars['_c']->value['note'],' ',2);?>
</p>
                    <?php if ($_smarty_tpl->tpl_vars['nuxprint']->value) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['nuxprint']->value;?>
" class="btn btn-success" name="nux" value="print">
                            <i class="glyphicon glyphicon-print"></i> Nux Print
                        </a>
                    <?php }?>
                </div>
            <?php }?>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/ui/ui/scripts/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/ui/ui/scripts/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php if ((isset($_smarty_tpl->tpl_vars['xfooter']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>
 <?php }?>
</body>

</html><?php }
}
