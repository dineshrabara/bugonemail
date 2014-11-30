<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>BugOnEmail</title>
    </head>
    <body style=" color: #2B2B2B;font: 14px 'Lucida Grande','Lucida Sans Unicode','Lucida Sans',Geneva,Verdana,sans-serif;">
        <div class="container" style="height: 100%;left: 0;margin: 0;padding: 0;position: fixed;top: 0;width: 100%;">
            <div class="stack-container" style=" height: 100%;position: relative;">

                <div class="frames-container cf " style="background: none repeat scroll 0 0 #FFFFFF;float: left;height: 100%;overflow: auto;width: 30%;">
                    <div class="details" style="border-left: 5px solid rgba(0, 0, 0, 0.2);padding: 10px 20px;">
                        <div class="data-table-container" id="data-tables">
                            <div class="data-table" id="sg-get-data" style="margin: 10px 0;width: 100%; font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;">
                                <label style=" border-bottom: 1px solid rgba(0, 0, 0, 0.08);color: #ED591A;display: block;font-size: 16px;font-weight: bold;margin: 10px 0 5px;padding: 10px 0 5px;">GET Data</label>
                                @if(!empty($input_get))
                                <table class="data-table" style="font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;margin: 10px 0;width: 100%;">

                                    @foreach($input_get as $key=>$val)
                                    <tr>
                                        <td style=" color: #463C54;min-width: 130px;overflow: hidden;padding-right: 5px;width: 20%;">{{$key}}</td>
                                        <td style="width: 80%;color:#999;-ms-word-break: break-all;word-break: break-all;word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;">{{print_r($val,true)}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                                @else
                                <span style="color: rgba(0, 0, 0, 0.3);font-style: italic;">empty</span>
                                @endif
                            </div>
                            <div class="data-table" id="sg-get-data" style="margin: 10px 0;width: 100%; font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;">
                                <label style=" border-bottom: 1px solid rgba(0, 0, 0, 0.08);color: #ED591A;display: block;font-size: 16px;font-weight: bold;margin: 10px 0 5px;padding: 10px 0 5px;">POST Data</label>
                                @if(!empty($input_post))
                                <table class="data-table" style="font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;margin: 10px 0;width: 100%;">
                                    @foreach($input_post as $key=>$val)
                                    <tr>
                                        <td style=" color: #463C54;min-width: 130px;overflow: hidden;padding-right: 5px;width: 20%;">{{$key}}</td>
                                        <td style="width: 80%;color:#999;-ms-word-break: break-all;word-break: break-all;word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;">{{print_r($val,true)}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                                @else
                                <span style="color: rgba(0, 0, 0, 0.3);font-style: italic;">empty</span>
                                @endif
                            </div>
                            <div class="data-table" id="sg-get-data" style="margin: 10px 0;width: 100%; font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;">
                                <label style=" border-bottom: 1px solid rgba(0, 0, 0, 0.08);color: #ED591A;display: block;font-size: 16px;font-weight: bold;margin: 10px 0 5px;padding: 10px 0 5px;">Input Old Data</label>
                                @if(!empty($input_old))
                                <table class="data-table" style="font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;margin: 10px 0;width: 100%;">

                                    @foreach($input_old as $key=>$val)
                                    <tr>
                                        <td style=" color: #463C54;min-width: 130px;overflow: hidden;padding-right: 5px;width: 20%;">{{$key}}</td>
                                        <td style="width: 80%;color:#999;-ms-word-break: break-all;word-break: break-all;word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;">{{print_r($val,true)}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                                @else
                                <span style="color: rgba(0, 0, 0, 0.3);font-style: italic;">empty</span>
                                @endif
                            </div>
                            <div class="data-table" id="sg-get-data" style="margin: 10px 0;width: 100%; font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;">
                                <label style=" border-bottom: 1px solid rgba(0, 0, 0, 0.08);color: #ED591A;display: block;font-size: 16px;font-weight: bold;margin: 10px 0 5px;padding: 10px 0 5px;">Files</label>
                                @if(!empty($file))
                                <table class="data-table" style="font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;margin: 10px 0;width: 100%;">

                                    @foreach($file as $key=>$val)
                                    <tr>
                                        <td style=" color: #463C54;min-width: 130px;overflow: hidden;padding-right: 5px;width: 20%;">{{$key}}</td>
                                        <td style="width: 80%;color:#999;-ms-word-break: break-all;word-break: break-all;word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;">{{print_r($val,true)}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                                @else
                                <span style="color: rgba(0, 0, 0, 0.3);font-style: italic;" >empty</span>
                                @endif
                            </div>
                            <div class="data-table" id="sg-get-data" style="margin: 10px 0;width: 100%; font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;">
                                <label style=" border-bottom: 1px solid rgba(0, 0, 0, 0.08);color: #ED591A;display: block;font-size: 16px;font-weight: bold;margin: 10px 0 5px;padding: 10px 0 5px;">Session All</label>
                                @if(!empty($session))
                                <table class="data-table" style="font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;margin: 10px 0;width: 100%;">

                                    @foreach($session as $key=>$val)
                                    <tr>
                                        <td style=" color: #463C54;min-width: 130px;overflow: hidden;padding-right: 5px;width: 20%;">{{$key}}</td>
                                        <td style="width: 80%;color:#999;-ms-word-break: break-all;word-break: break-all;word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;">{{print_r($val,true)}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                                @else
                                <span style="color: rgba(0, 0, 0, 0.3);font-style: italic;">empty</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="details-container cf" style="background: none repeat scroll 0 0 #FFFFFF;float: right;height: 100%;overflow: auto;width: 70%;">

                    <div style="background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAACWCAYAAADaDe2PAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpBNTk1RDY3OTlBRkQxMUUyOUM0M0EzNzM1OTdBRTY0NyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpBNTk1RDY3QTlBRkQxMUUyOUM0M0EzNzM1OTdBRTY0NyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkE1OTVENjc3OUFGRDExRTI5QzQzQTM3MzU5N0FFNjQ3IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkE1OTVENjc4OUFGRDExRTI5QzQzQTM3MzU5N0FFNjQ3Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+GLAjkgAAEaxJREFUeNrsXet2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') no-repeat scroll right center #DDDDDD;border-left: 5px solid #ED3D1A;box-sizing: border-box;color: #555555;padding: 20px;">
                        <div class="exception">
                            <h3 class="exc-title" style="color: #616161;font-weight: normal;margin: 0;">
                                {{$class_name}}
                            </h3>
                            <p class="exc-message" style="font-size: 16px;margin: 5px 0;word-wrap: break-word;">
                            </p>
                        </div>
                    </div>

                    <div class="frame-code-container ">
                        <div class="frame-code active" id="frame-code-0" style=" background: none repeat scroll 0 0 #F0F0F0;border-left: 5px solid #EDA31A;display: block;padding: 20px;">
                            <div class="frame-file" style="background: none repeat scroll 0 0 #ED591A;color: #FFFFFF;font-size: 11px;font-weight: normal;padding: 10px;font-family: 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;word-wrap: break-word;">
                                {{$subject_line}}
                            </div>
                            <pre class="code-block prettyprint" style="white-space: pre-wrap; background: none repeat scroll 0 0 #272727;color: #929292;font-family: 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;font-size: 11px;font-weight: normal;    line-height: 1.5em; box-shadow: 0 0 6px rgba(0, 0, 0, 0.3) inset;margin: 0;padding: 10px;">
                                {{$error}}
                            </pre>

                            <div class="frame-comments empty" style="padding: 8px 15px; background: none repeat scroll 0 0 #404040;border-top: medium none;font-size: 12px; color: #828282;">
                                By Dinesh Rabara
                            </div>

                        </div>
                    </div>

                    <div class="details" style=" border-left: 5px solid rgba(0, 0, 0, 0.2);padding: 10px 20px;">
                        <div class="data-table-container" id="data-tables">
                            <div class="data-table" id="sg-serverrequest-data" style="font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;margin: 10px 0;width: 100%;">
                                <label style=" border-bottom: 1px solid rgba(0, 0, 0, 0.08);color: #ED591A;display: block;font-size: 16px;font-weight: bold;margin: 10px 0 5px;padding: 10px 0 5px;">Server/Request Data</label>
                                @if(!empty($server))
                                <table class="data-table" style="font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;margin: 10px 0;width: 100%;">

                                    @foreach($server as $key=>$val)
                                    <tr>
                                        <td style=" color: #463C54;min-width: 130px;overflow: hidden;padding-right: 5px;width: 20%;">{{$key}}</td>
                                        <td style="width: 80%;color:#999;-ms-word-break: break-all;word-break: break-all;word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;">{{is_string($val)?$val:json_encode($val)}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                                @else
                                <span style="color: rgba(0, 0, 0, 0.3);font-style: italic;">empty</span>
                                @endif
                            </div>
                            <div class="data-table" id="sg-cookies" style="font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;margin: 10px 0;width: 100%;">
                                <label style=" border-bottom: 1px solid rgba(0, 0, 0, 0.08);color: #ED591A;display: block;font-size: 16px;font-weight: bold;margin: 10px 0 5px;padding: 10px 0 5px;">Header</label>
                                @if(!empty($header))
                                <table class="data-table" style="font: 12px 'Source Code Pro',Monaco,Consolas,'Lucida Console',monospace;margin: 10px 0;width: 100%;">

                                    @foreach($header as $key=>$val)
                                    <tr>
                                        <td style=" color: #463C54;min-width: 130px;overflow: hidden;padding-right: 5px;width: 20%;">{{$key}}</td>
                                        <td style="width: 80%;color:#999;-ms-word-break: break-all;word-break: break-all;word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;">{{implode(',', $val)}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                                @else
                                <span style="color: rgba(0, 0, 0, 0.3);font-style: italic;">empty</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
