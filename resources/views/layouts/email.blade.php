<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Liquidador Sodexo</title>
    <style>
        a:hover {
            text-decoration: underline !important;
        }
        td.promocell p {
            color:#e1d8c1;
            font-size:16px;
            line-height:26px;
            font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;
            margin-top:0;
            margin-bottom:0;
            padding-top:0;
            padding-bottom:14px;
            font-weight:normal;
        }
        td.contentblock {
            font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;
        }
        td.contentblock h4 {
            color:#444444 !important;
            font-size:16px;
            line-height:24px;
            font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;
            margin-top:0;
            margin-bottom:10px;
            padding-top:0;
            padding-bottom:0;
            font-weight:normal;
        }
        td.contentblock h4 a {
            color:#444444;
            text-decoration:none;
        }
        td.contentblock p {
            color:#333333;
            font-size:13px;
            line-height:19px;
            font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;
            margin-top:0;
            margin-bottom:12px;
            padding-top:0;
            padding-bottom:0;
            font-weight:normal;
        }
        td.contentblock p.well {
            padding: 15px;
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
            border-radius:10px;
        }
        td.contentblock p a {
            color:#3ca7dd;
            text-decoration:none;
        }
        @media only screen and (max-device-width: 480px) {
            div[class="header"] {
                font-size: 16px !important;
            }
            table[class="table"], td[class="cell"] {
                width: 300px !important;
            }
            table[class="promotable"], td[class="promocell"] {
                width: 325px !important;
            }
            td[class="footershow"] {
                width: 300px !important;
            }
            table[class="hide"], img[class="hide"], td[class="hide"] {
                display: none !important;
            }
            img[class="divider"] {
                height: 1px !important;
            }
            td[class="logocell"] {
                padding-top: 15px !important;
                padding-left: 15px !important;
                width: 300px !important;
            }
            img[id="screenshot"] {
                width: 325px !important;
                height: 127px !important;
            }
            img[class="galleryimage"] {
                width: 53px !important;
                height: 53px !important;
            }
            p[class="reminder"] {
                font-size: 11px !important;
            }
            h4[class="secondary"] {
                line-height: 22px !important;
                margin-bottom: 15px !important;
                font-size: 18px !important;
            }
        }
    </style>
    @yield('styles')
</head>
<body bgcolor="#e4e4e4" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" style="-webkit-font-smoothing: antialiased;width:100% !important;background:#e4e4e4;-webkit-text-size-adjust:none;">
<table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#e4e4e4">
    <tr>
        <td bgcolor="#e4e4e4" width="100%">
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="table">
                <tr>
                    <td width="600" class="cell">
                        <table width="600" cellpadding="0" cellspacing="0" border="0" class="table">
                            <tr>
                                <td width="250" bgcolor="#e4e4e4" class="logocell">
                                    <img border="0" src="{!! isset($message)?$message->embed(public_path().'/images/emails/spacer.gif'):url('images/emails/spacer.gif') !!}" width="1" height="20" class="hide">
                                    <br class="hide">
                                        <img src="{!! isset($message)?$message->embed( public_path().'/images/logo_sodexo.png' ):url('images/logo_sodexo.png') !!}" width="200" height="80" alt="Liquidador" style="-ms-interpolation-mode:bicubic;">
                                    <br>
                                    <img border="0" src="{!! isset($message)?$message->embed(public_path().'/images/emails/spacer.gif'):url('images/emails/spacer.gif') !!}" width="1" height="10" class="hide"><br class="hide"></td>
                                <td align="right" width="350" class="hide" style="color:#a6a6a6;font-size:12px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;text-shadow: 0 1px 0 #ffffff;" valign="top" bgcolor="#e4e4e4"><img border="0" src="{!! isset($message)?$message->embed(public_path().'/images/emails/spacer.gif'):url('images/emails/spacer.gif') !!}" width="1" height="63"><br></td>
                            </tr>
                        </table>
                        <img border="0" src="{!! isset($message)?$message->embed(public_path().'/images/emails/spacer.gif'):url('images/emails/spacer.gif') !!}" width="1" height="15" class="divider"><br>
                        @section('content')
                        @show

                    </td>
                </tr>
            </table>
            <img border="0" src="{!! isset($message)?$message->embed(public_path().'/images/emails/spacer.gif'):url('images/emails/spacer.gif') !!}" width="1" height="25" class="divider"><br>
            <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#f2f2f2">
                <tr>
                    <td>
                        <img border="0" src="{!! isset($message)?$message->embed(public_path().'/images/emails/spacer.gif'):url('images/emails/spacer.gif') !!}" width="1" height="30"><br>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="table">
                            <tr>
                                <td width="600" nowrap bgcolor="#f2f2f2" class="cell">
                                    <table width="600" cellpadding="0" cellspacing="0" border="0" class="table">
                                        <tr>
                                            <td width="380" valign="top" class="footershow">
                                                <img border="0" src="{!! isset($message)?$message->embed(public_path().'/images/emails/spacer.gif'):url('images/emails/spacer.gif') !!}" width="1" height="8"><br>
                                                    <p style="color:#a6a6a6;font-size:12px;font-family:Helvetica,Arial,sans-serif;margin-top:0;margin-bottom:15px;padding-top:0;padding-bottom:0;line-height:18px;" class="reminder">Estás recibiendo este correo porque te encuentras inscrito(a) en la plataforma de liquidaciones de Sodexo.</p>
                                                {{--@if (isset($unsubscribe))--}}
                                                    {{--<p style="color:#c9c9c9;font-size:12px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;">{{ $unsubscribe }}</p>--}}
                                                {{--@endif--}}
                                            </td>
                                            <td align="right" width="220" style="color:#a6a6a6;font-size:12px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;text-shadow: 0 1px 0 #ffffff;" valign="top" class="hide">
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tr>
                                                            <td><a href="https://twitter.com/"><img border="0" src="{!! isset($message)?$message->embed(public_path().'/images/emails/twitter.gif'):url('images/emails/twitter.gif') !!}" width="42" height="32" alt="Síguenos Twitter"></a></td>
                                                            <td><a href="https://www.facebook.com/"><img border="0" src="{!! isset($message)?$message->embed(public_path().'/images/emails/facebook.gif'):url('images/emails/facebook.gif') !!}" width="32" height="32" alt="Visitanos en Facebook"></a></td>
                                                    </tr>
                                                </table>
                                                <img border="0" src="{!! isset($message)?$message->embed(public_path().'/images/emails/spacer.gif'):url('images/emails/spacer.gif') !!}" width="1" height="10"><br><p style="color:#b3b3b3;font-size:11px;line-height:15px;font-family:Helvetica,Arial,sans-serif;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-weight:bold;">Sodexo</p>
                                                    <p style="color:#b3b3b3;font-size:11px;line-height:15px;font-family:Helvetica,Arial,sans-serif;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-weight:normal;">
                                                        Colombia
                                                    </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <img border="0" src="{!! isset($message)?$message->embed(public_path().'/images/emails/spacer.gif'):url('images/emails/spacer.gif') !!}" width="1" height="25"><br>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
