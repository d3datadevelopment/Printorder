[{block name="d3printorder_email_order_cust_print"}]
    [{if $hasFile && $sHtmlPath}]
        [{block name="email_order_cust_print_functionality"}]
            <style type="text/css">
                .elementbar {
                    margin-bottom: 2em;
                    padding: 2em;
                    background-color: lightblue;
                    text-align: center;
                }
                .elementbar a {
                    padding: 1em;
                    border: 1px solid black;
                    border-radius: 0.5em;
                    background-color: #ebebeb;
                    margin: 0 1em;
                }
                .elementbar a:before {
                    margin-right: 10px;
                    position: relative;
                }
                .elementbar a.print:before {
                    content: url("data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjwhLS0gVXBsb2FkZWQgdG86IFNWRyBSZXBvLCB3d3cuc3ZncmVwby5jb20sIFRyYW5zZm9ybWVkIGJ5OiBTVkcgUmVwbyBNaXhlciBUb29scyAtLT4KPHN2ZyB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgZmlsbD0iIzAwMDAwMCI+Cg08ZyBpZD0iU1ZHUmVwb19iZ0NhcnJpZXIiIHN0cm9rZS13aWR0aD0iMCIvPgoNPGcgaWQ9IlNWR1JlcG9fdHJhY2VyQ2FycmllciIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cg08ZyBpZD0iU1ZHUmVwb19pY29uQ2FycmllciI+IDx0aXRsZT5wcmludGVyIFsjMTU5OF08L3RpdGxlPiA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4gPGRlZnM+IDwvZGVmcz4gPGcgaWQ9IlBhZ2UtMSIgc3Ryb2tlLXdpZHRoPSIwLjAwMDIiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+IDxnIGlkPSJEcmliYmJsZS1MaWdodC1QcmV2aWV3IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTgwLjAwMDAwMCwgLTE5MTkuMDAwMDAwKSIgZmlsbD0iIzAwMDAwMCI+IDxnIGlkPSJpY29ucyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTYuMDAwMDAwLCAxNjAuMDAwMDAwKSI+IDxwYXRoIGQ9Ik0xMzMuMTY3LDE3NjguODMzIEMxMzMuMTY3LDE3NjkuMzg1IDEzMi43MTksMTc2OS44MzMgMTMyLjE2NywxNzY5LjgzMyBDMTMxLjYxNSwxNzY5LjgzMyAxMzEuMTY3LDE3NjkuMzg1IDEzMS4xNjcsMTc2OC44MzMgQzEzMS4xNjcsMTc2OC4yODEgMTMxLjYxNSwxNzY3LjgzMyAxMzIuMTY3LDE3NjcuODMzIEMxMzIuNzE5LDE3NjcuODMzIDEzMy4xNjcsMTc2OC4yODEgMTMzLjE2NywxNzY4LjgzMyBMMTMzLjE2NywxNzY4LjgzMyBaIE0xMjkuMTY3LDE3NjguODMzIEMxMjkuMTY3LDE3NjkuMzg1IDEyOC43MTksMTc2OS44MzMgMTI4LjE2NywxNzY5LjgzMyBDMTI3LjYxNSwxNzY5LjgzMyAxMjcuMTY3LDE3NjkuMzg1IDEyNy4xNjcsMTc2OC44MzMgQzEyNy4xNjcsMTc2OC4yODEgMTI3LjYxNSwxNzY3LjgzMyAxMjguMTY3LDE3NjcuODMzIEMxMjguNzE5LDE3NjcuODMzIDEyOS4xNjcsMTc2OC4yODEgMTI5LjE2NywxNzY4LjgzMyBMMTI5LjE2NywxNzY4LjgzMyBaIE0xNDIsMTc3NC41IEMxNDIsMTc3NC43NzYgMTQxLjc3NiwxNzc1IDE0MS41LDE3NzUgTDE0MSwxNzc1IEwxNDEsMTc3MSBMMTI3LDE3NzEgTDEyNywxNzc1IEwxMjYuNSwxNzc1IEMxMjYuMjI0LDE3NzUgMTI2LDE3NzQuNzc2IDEyNiwxNzc0LjUgTDEyNiwxNzY4IEMxMjYsMTc2Ny40NDggMTI2LjQ0OCwxNzY3IDEyNywxNzY3IEwxNDEsMTc2NyBDMTQxLjU1MywxNzY3IDE0MiwxNzY3LjQ0OCAxNDIsMTc2OCBMMTQyLDE3NzQuNSBaIE0xMzksMTc3NiBDMTM5LDE3NzYuNTUyIDEzOC41NTMsMTc3NyAxMzgsMTc3NyBMMTMwLDE3NzcgQzEyOS40NDgsMTc3NyAxMjksMTc3Ni41NTIgMTI5LDE3NzYgTDEyOSwxNzczIEwxMzksMTc3MyBMMTM5LDE3NzYgWiBNMTI4LDE3NjIgQzEyOCwxNzYxLjQ0OCAxMjguNDQ4LDE3NjEgMTI5LDE3NjEgTDEzOSwxNzYxIEMxMzkuNTUzLDE3NjEgMTQwLDE3NjEuNDQ4IDE0MCwxNzYyIEwxNDAsMTc2NSBMMTI4LDE3NjUgTDEyOCwxNzYyIFogTTE0MiwxNzY1IEwxNDIsMTc2MSBDMTQyLDE3NTkuODk1IDE0MS4xMDUsMTc1OSAxNDAsMTc1OSBMMTI4LDE3NTkgQzEyNi44OTYsMTc1OSAxMjYsMTc1OS44OTUgMTI2LDE3NjEgTDEyNiwxNzY1IEMxMjQuODk2LDE3NjUgMTI0LDE3NjUuODk1IDEyNCwxNzY3IEwxMjQsMTc3NSBDMTI0LDE3NzYuMTA0IDEyNC44OTYsMTc3NyAxMjYsMTc3NyBMMTI3LDE3NzcgQzEyNywxNzc4LjEwNCAxMjcuODk2LDE3NzkgMTI5LDE3NzkgTDEzOSwxNzc5IEMxNDAuMTA1LDE3NzkgMTQxLDE3NzguMTA0IDE0MSwxNzc3IEwxNDIsMTc3NyBDMTQzLjEwNSwxNzc3IDE0NCwxNzc2LjEwNCAxNDQsMTc3NSBMMTQ0LDE3NjcgQzE0NCwxNzY1Ljg5NSAxNDMuMTA1LDE3NjUgMTQyLDE3NjUgTDE0MiwxNzY1IFoiIGlkPSJwcmludGVyLVsjMTU5OF0iPiA8L3BhdGg+IDwvZz4gPC9nPiA8L2c+IDwvZz4KDTwvc3ZnPg==");
                    top: 5px;
                }
                .elementbar a.close:before {
                    content: url("data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjwhLS0gVXBsb2FkZWQgdG86IFNWRyBSZXBvLCB3d3cuc3ZncmVwby5jb20sIFRyYW5zZm9ybWVkIGJ5OiBTVkcgUmVwbyBNaXhlciBUb29scyAtLT4KPHN2ZyB3aWR0aD0iMjVweCIgaGVpZ2h0PSIyNXB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cg08ZyBpZD0iU1ZHUmVwb19iZ0NhcnJpZXIiIHN0cm9rZS13aWR0aD0iMCIvPgoNPGcgaWQ9IlNWR1JlcG9fdHJhY2VyQ2FycmllciIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cg08ZyBpZD0iU1ZHUmVwb19pY29uQ2FycmllciI+IDxnIGlkPSJNZW51IC8gQ2xvc2VfTUQiPiA8cGF0aCBpZD0iVmVjdG9yIiBkPSJNMTggMThMMTIgMTJNMTIgMTJMNiA2TTEyIDEyTDE4IDZNMTIgMTJMNiAxOCIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPiA8L2c+IDwvZz4KDTwvc3ZnPg==");
                    top: 7px;
                }
                @media print { .elementbar { display : none; } }
            </style>
            <div class="elementbar">
                <a class="print" href="#" onclick="print();">[{oxmultilang ident="D3_ORDERPRINT_PRINT"}]</a>
                <a class="close" id="close_element" href="#" onclick="window.close();">[{oxmultilang ident="D3_ORDERPRINT_CLOSE"}]</a>
            </div>
            <script type="text/javascript">
                if (window.opener === null) {
                    document.getElementById('close_element').style.display = "none";
                }
            </script>
        [{/block}]
        [{include file="$sHtmlPath"}]
    [{else}]
        [{oxmultilang ident="D3_ORDERPRINT_NOFILE_ERROR"}]
    [{/if}]
[{/block}]
