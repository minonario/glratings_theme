/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */


jQuery( function ( $ ) {

    window.addEventListener("scroll", function(){
      var paso = true;
        if ( document.documentElement.scrollTop > 100 || document.body.scrollTop > 100 ){

          $(document).find('#sinatra-header-inner').removeClass("navbar-transparent");
          var ep = "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgNTg1LjkgMjMxLjUiPjxzdHlsZT4uc3Qxe2ZpbGw6bm9uZX0uc3Q0e2ZpbGw6IzJiMzk5MH08L3N0eWxlPjxnIGlkPSJncmlzIj48ZGVmcz48cGF0aCBpZD0iU1ZHSURfMV8iIGQ9Ik0yOCAxOC41aDE3Ni41djE4MC4zSDI4eiIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzJfIj48dXNlIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIgb3ZlcmZsb3c9InZpc2libGUiLz48L2NsaXBQYXRoPjxwYXRoIGQ9Ik05Ni4zIDQ3LjljMzMuNi0xMCA2OC45IDkuMSA3OC45IDQyLjdzLTkuMSA2OC45LTQyLjcgNzguOS02OC45LTkuMS03OC45LTQyLjdMMjggMTM0LjRjMTQuMiA0Ny43IDY0LjQgNzQuOSAxMTIuMSA2MC43IDQ3LjctMTQuMiA3NC45LTY0LjQgNjAuNy0xMTIuMS0xNC4zLTQ3LjgtNjQuNC03NC45LTExMi4yLTYwLjdsNy43IDI1LjZ6IiBjbGlwLXBhdGg9InVybCgjU1ZHSURfMl8pIiBmaWxsPSIjYmNiZWMwIi8+PHBhdGggY2xhc3M9InN0MSIgZD0iTS0xMDUuMS0xOTNoNzkydjYxMmgtNzkyeiIvPjxwYXRoIGNsYXNzPSJzdDEiIGQ9Ik0tMTA1LjEtMTkzaDc5MnY2MTJoLTc5MnoiLz48cGF0aCBjbGFzcz0ic3QxIiBkPSJNLTEwNS4xLTE5M2g3OTJ2NjEyaC03OTJ6Ii8+PC9nPjxnIGlkPSJhenVsX2NsYXJvIj48ZGVmcz48cGF0aCBpZD0iU1ZHSURfM18iIGQ9Ik0xOS41IDEuMmgyMTUuOHYyMTEuMkgxOS41eiIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIHhsaW5rOmhyZWY9IiNTVkdJRF8zXyIgb3ZlcmZsb3c9InZpc2libGUiLz48L2NsaXBQYXRoPjxwYXRoIGQ9Ik0xNTguMSAyMDhDMTAxIDIyNC45IDQxIDE5Mi40IDI0IDEzNS40IDcgNzguMyAzOS41IDE4LjIgOTYuNiAxLjJsOS4xIDMwLjZjLTQwLjIgMTEuOS02MyA1NC4yLTUxLjEgOTQuNCAxMS45IDQwLjIgNTQuMiA2MyA5NC40IDUxLjEgNDAuMi0xMS45IDYzLTU0LjIgNTEuMS05NC40bDMwLjYtOS4xYzE3IDU3LjEtMTUuNSAxMTcuMi03Mi42IDEzNC4yIiBjbGlwLXBhdGg9InVybCgjU1ZHSURfNF8pIiBmaWxsPSIjMDljIi8+PHBhdGggY2xhc3M9InN0MSIgZD0iTS0xMDUuMS0xOTNoNzkydjYxMmgtNzkyeiIvPjxwYXRoIGQ9Ik0yNjcuOSAxNjhoNS44djYuNWMxLjctMi42IDMuNi00LjUgNS41LTUuNyAxLjktMS4zIDQtMS45IDYuMS0xLjkgMS42IDAgMy4zLjUgNS4xIDEuNWwtMyA0LjhjLTEuMi0uNS0yLjItLjgtMy0uOC0xLjkgMC0zLjguOC01LjUgMi40LTEuOCAxLjYtMy4xIDQtNC4xIDcuMy0uNyAyLjUtMS4xIDcuNy0xLjEgMTUuNHYxNS4xaC01LjhWMTY4em03NC42IDB2NDQuNWgtNS42di03LjdjLTIuNCAyLjktNS4xIDUuMS04LjEgNi42cy02LjMgMi4yLTkuOCAyLjJjLTYuMyAwLTExLjctMi4zLTE2LjEtNi45LTQuNS00LjYtNi43LTEwLjEtNi43LTE2LjcgMC02LjQgMi4yLTExLjkgNi44LTE2LjQgNC41LTQuNiA5LjktNi44IDE2LjItNi44IDMuNyAwIDcgLjggOS45IDIuMyAzIDEuNiA1LjYgMy45IDcuOCA3VjE2OGg1LjZ6bS0yMi45IDQuM2MtMy4yIDAtNi4xLjgtOC44IDIuNC0yLjcgMS42LTQuOCAzLjgtNi40IDYuNi0xLjYgMi44LTIuNCA1LjgtMi40IDkgMCAzLjEuOCA2LjEgMi40IDkgMS42IDIuOSAzLjggNS4xIDYuNSA2LjcgMi43IDEuNiA1LjYgMi40IDguNyAyLjQgMy4xIDAgNi4xLS44IDguOS0yLjQgMi44LTEuNiA1LTMuNyA2LjUtNi40czIuMy01LjcgMi4zLTkuMWMwLTUuMS0xLjctOS41LTUuMS0xMi45LTMuNS0zLjUtNy42LTUuMy0xMi42LTUuM3ptNDMuNy0yMC45aDUuN1YxNjhoOS4xdjVIMzY5djM5LjZoLTUuN1YxNzNoLTcuOHYtNWg3Ljh2LTE2LjZ6bTI4LjMtMS44YzEuMyAwIDIuNC41IDMuMyAxLjQuOS45IDEuNCAyIDEuNCAzLjQgMCAxLjMtLjUgMi40LTEuNCAzLjMtLjkuOS0yIDEuNC0zLjMgMS40LTEuMyAwLTIuNC0uNS0zLjMtMS40LS45LS45LTEuNC0yLTEuNC0zLjMgMC0xLjMuNS0yLjQgMS40LTMuNCAxLS45IDIuMS0xLjQgMy4zLTEuNHptLTIuOCAxOC40aDUuN3Y0NC41aC01LjdWMTY4em0yMC41IDBoNS43djhjMi4zLTMuMSA0LjgtNS4zIDcuNi02LjkgMi44LTEuNSA1LjgtMi4zIDkuMS0yLjNzNi4zLjggOC45IDIuNWMyLjYgMS43IDQuNSA0IDUuNyA2LjggMS4yIDIuOSAxLjggNy4zIDEuOCAxMy40djIyLjloLTUuN3YtMjEuMmMwLTUuMS0uMi04LjUtLjYtMTAuMy0uNy0yLjktMS45LTUuMi0zLjgtNi42LTEuOS0xLjUtNC4zLTIuMi03LjQtMi4yLTMuNSAwLTYuNiAxLjEtOS4zIDMuNC0yLjcgMi4zLTQuNSA1LjEtNS40IDguNS0uNSAyLjItLjggNi4yLS44IDEyLjF2MTYuM2gtNS43VjE2OHptOTIuNCAwaDUuN3YzNS41YzAgNi4yLS41IDEwLjgtMS42IDEzLjctMS41IDQuMS00LjEgNy4yLTcuOCA5LjRzLTguMiAzLjMtMTMuNCAzLjNjLTMuOCAwLTcuMi0uNS0xMC4zLTEuNi0zLTEuMS01LjUtMi41LTcuNC00LjMtMS45LTEuOC0zLjctNC41LTUuMy04aDYuMmMxLjcgMi45IDMuOSA1LjEgNi42IDYuNSAyLjcgMS40IDYgMi4xIDEwIDIuMSAzLjkgMCA3LjItLjcgOS45LTIuMiAyLjctMS41IDQuNi0zLjMgNS44LTUuNSAxLjEtMi4yIDEuNy01LjggMS43LTEwLjdWMjA0Yy0yLjIgMi43LTQuOCA0LjgtNy45IDYuM3MtNi40IDIuMi05LjkgMi4yYy00LjEgMC03LjktMS0xMS41LTMtMy42LTItNi40LTQuOC04LjQtOC4yLTItMy40LTIuOS03LjItMi45LTExLjMgMC00LjEgMS04IDMuMS0xMS41IDItMy42IDQuOS02LjQgOC41LTguNCAzLjYtMi4xIDcuNC0zLjEgMTEuNC0zLjEgMy4zIDAgNi40LjcgOS4zIDIuMSAyLjkgMS40IDUuNyAzLjYgOC4zIDYuOFYxNjh6bS0xNi44IDQuM2MtMy4yIDAtNi4zLjgtOSAyLjQtMi44IDEuNi01IDMuNy02LjUgNi41LTEuNiAyLjgtMi40IDUuOC0yLjQgOSAwIDQuOSAxLjYgOC45IDQuOSAxMi4xIDMuMyAzLjIgNy41IDQuOCAxMi43IDQuOCA1LjMgMCA5LjUtMS42IDEyLjctNC43IDMuMi0zLjIgNC44LTcuMyA0LjgtMTIuNSAwLTMuNC0uNy02LjMtMi4yLTktMS41LTIuNi0zLjYtNC43LTYuMy02LjItMi43LTEuNi01LjYtMi40LTguNy0yLjR6bTYwLjIuNWwtMy43IDMuOGMtMy4xLTMtNi4xLTQuNS05LTQuNS0xLjkgMC0zLjUuNi00LjggMS44LTEuMyAxLjItMiAyLjctMiA0LjMgMCAxLjQuNSAyLjggMS42IDQuMSAxLjEgMS4zIDMuNCAyLjkgNi45IDQuNyA0LjMgMi4yIDcuMiA0LjMgOC43IDYuNCAxLjUgMi4xIDIuMyA0LjQgMi4zIDcgMCAzLjctMS4zIDYuOC0zLjkgOS4zLTIuNiAyLjUtNS44IDMuOC05LjYgMy44LTIuNiAwLTUtLjYtNy40LTEuNy0yLjMtMS4xLTQuMy0yLjctNS44LTQuNmwzLjYtNC4xYzIuOSAzLjMgNiA0LjkgOS4zIDQuOSAyLjMgMCA0LjItLjcgNS45LTIuMiAxLjYtMS41IDIuNC0zLjIgMi40LTUuMiAwLTEuNi0uNS0zLjEtMS42LTQuNC0xLjEtMS4zLTMuNS0yLjgtNy4yLTQuNy00LTIuMS02LjgtNC4xLTguMi02LjEtMS40LTItMi4yLTQuMy0yLjItNi45IDAtMy40IDEuMi02LjIgMy41LTguNHM1LjItMy40IDguNy0zLjRjNC4yLjEgOC4zIDIuMSAxMi41IDYuMXoiIGZpbGw9IiMwOWMiLz48cGF0aCBjbGFzcz0ic3QxIiBkPSJNMjYzLjYgMTM4LjJoMjU1LjV2OTMuM0gyNjMuNnoiLz48cGF0aCBjbGFzcz0ic3QxIiBkPSJNLTEwNS4xLTE5M2g3OTJ2NjEyaC03OTJ6Ii8+PHBhdGggY2xhc3M9InN0MSIgZD0iTS0xMDUuMS0xOTNoNzkydjYxMmgtNzkyeiIvPjwvZz48ZyBpZD0iYXp1bF9vc2N1cm8iPjxwYXRoIGNsYXNzPSJzdDQiIGQ9Ik0xMDcuOCAxODMuN2MtNDEuOSAwLTc1LjktMzQtNzUuOS03NS45IDAtNDEuOSAzNC03NS45IDc1LjktNzUuOSA0MS45IDAgNzUuOSAzNCA3NS45IDc1LjloMzJDMjE1LjcgNDguMyAxNjcuNCAwIDEwNy44IDAgNDguMyAwIDAgNDguMyAwIDEwNy44YzAgNTkuNiA0OC4zIDEwNy44IDEwNy44IDEwNy44di0zMS45eiIvPjxwYXRoIGNsYXNzPSJzdDEiIGQ9Ik0tMTA1LjEtMTkzaDc5MnY2MTJoLTc5MnoiLz48cGF0aCBjbGFzcz0ic3Q0IiBkPSJNMzIxIDEyOC42Yy02LjkgMy43LTE0LjggNS42LTIzLjUgNS42LTE3LjUgMC0zMC0xMS45LTMwLTI5LjYgMC0xOC4yIDEyLjUtMzAuMSAzMC0zMC4xIDguNyAwIDE2LjUgMS44IDIyLjQgNy4xbC03LjUgNy41Yy0zLjYtMy41LTkuMi01LjUtMTQuOS01LjUtMTEuNyAwLTE5LjUgOS0xOS41IDIwLjMgMCAxMi4xIDcuOCAyMS4xIDE5LjUgMjEuMSA1LjEgMCA5LjgtMSAxMy4zLTN2LTEzLjRoLTExLjZ2LTkuMkgzMjF2MjkuMnptMTItNTIuN2gxMC4xdjQ3LjdoMjQuMnY5LjJIMzMzVjc1Ljl6bTY4LjctMS41YzE3LjgtLjMgMzAuMyAxMS42IDMwLjMgMjkuOCAwIDE3LjgtMTIuNSAyOS42LTMwLjMgMzAtMTcuNSAwLTMwLTExLjktMzAtMjkuNi0uMS0xOC4zIDEyLjQtMzAuMiAzMC0zMC4yem0wIDUwLjZjMTEuOCAwIDE5LjYtOSAxOS42LTIxLjEgMC0xMS4zLTcuOC0yMC4zLTE5LjYtMjAuMy0xMS43IDAtMTkuNSA5LTE5LjUgMjAuMyAwIDEyLjEgNy44IDIxLjEgMTkuNSAyMS4xem0zOS45LTQ5LjFoMjIuMmM4LjYgMCAxNy40IDMuOSAxNy40IDE0LjMgMCA2LjQtNCAxMC43LTkuOSAxMi40di4yYzcuMS44IDEyLjMgNi40IDEyLjMgMTMuNyAwIDEyLjQtMTAuOCAxNi4yLTIxLjUgMTYuMmgtMjAuNVY3NS45ek00NTEuNyA5OWg5LjJjNi43IDAgMTAuMS0yLjkgMTAuMS03LjEgMC00LjktMy40LTcuMy0xMS03LjNoLTguNFY5OXptMCAyNS4xaDkuM2M1LjIgMCAxMi41LS45IDEyLjUtOC40IDAtNS45LTMuOS04LTEyLThoLTkuN3YxNi40ek01MTIgNzUuOWg4LjhsMjQuNSA1Ni45aC0xMS42bC01LjMtMTNoLTI0LjdsLTUuMSAxM2gtMTEuM0w1MTIgNzUuOXptMTIuOSAzNS4xbC04LjgtMjMuMS04LjkgMjMuMWgxNy43em0yNi43LTM1LjFoMTAuMXY0Ny43aDI0LjJ2OS4yaC0zNC4zVjc1Ljl6Ii8+PHBhdGggY2xhc3M9InN0MSIgZD0iTS0xMDUuMS0xOTNoNzkydjYxMmgtNzkyeiIvPjxwYXRoIGNsYXNzPSJzdDEiIGQ9Ik0tMTA1LjEtMTkzaDc5MnY2MTJoLTc5MnoiLz48L2c+PC9zdmc+"
          if (paso == true){
            paso = false;
            $(document).find('.GlobalRatingLogo').attr('src',ep);
          }
        }else if( (document.documentElement.scrollTop < 101 || document.body.scrollTop < 101) ){
          
          paso = true;
          var ep = "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1ODUuOSAyMjkuOSI+PHN0eWxlPi5zdDh7ZmlsbDpub25lfS5zdDEwe2ZpbGw6I2ZmZn08L3N0eWxlPjxnIGlkPSJncmlzIj48cGF0aCBjbGFzcz0ic3Q4IiBkPSJNLTEwNS4xLTE5M2g3OTJ2NjEyaC03OTJ6Ii8+PHBhdGggY2xhc3M9InN0OCIgZD0iTS0xMDUuMS0xOTNoNzkydjYxMmgtNzkyeiIvPjxwYXRoIGNsYXNzPSJzdDgiIGQ9Ik0tMTA1LjEtMTkzaDc5MnY2MTJoLTc5MnoiLz48cGF0aCBkPSJNOTYuMyA0Ny45YzMzLjYtMTAgNjguOSA5LjEgNzguOSA0Mi43cy05LjEgNjguOS00Mi43IDc4LjktNjguOS05LjEtNzguOS00Mi43TDI4IDEzNC40YzE0LjIgNDcuNyA2NC40IDc0LjkgMTEyLjEgNjAuNyA0Ny43LTE0LjIgNzQuOS02NC40IDYwLjctMTEyLjEtMTQuMy00Ny44LTY0LjQtNzQuOS0xMTIuMi02MC43bDcuNyAyNS42eiIgb3BhY2l0eT0iLjMiIGZpbGw9IiNmZmYiLz48L2c+PGcgaWQ9ImF6dWxfY2xhcm8iPjxwYXRoIGNsYXNzPSJzdDgiIGQ9Ik0tMTA1LjEtMTkzaDc5MnY2MTJoLTc5MnoiLz48cGF0aCBjbGFzcz0ic3Q4IiBkPSJNLTEwNS4xLTE5M2g3OTJ2NjEyaC03OTJ6Ii8+PHBhdGggY2xhc3M9InN0OCIgZD0iTS0xMDUuMS0xOTNoNzkydjYxMmgtNzkyeiIvPjxwYXRoIGNsYXNzPSJzdDEwIiBkPSJNMjY3LjkgMTY4aDUuOHY2LjVjMS43LTIuNiAzLjYtNC41IDUuNS01LjcgMS45LTEuMyA0LTEuOSA2LjEtMS45IDEuNiAwIDMuMy41IDUuMSAxLjVsLTMgNC44Yy0xLjItLjUtMi4yLS44LTMtLjgtMS45IDAtMy44LjgtNS41IDIuNC0xLjggMS42LTMuMSA0LTQuMSA3LjMtLjcgMi41LTEuMSA3LjctMS4xIDE1LjR2MTUuMWgtNS44VjE2OHptNzQuNiAwdjQ0LjVoLTUuNnYtNy43Yy0yLjQgMi45LTUuMSA1LjEtOC4xIDYuNnMtNi4zIDIuMi05LjggMi4yYy02LjMgMC0xMS43LTIuMy0xNi4xLTYuOS00LjUtNC42LTYuNy0xMC4xLTYuNy0xNi43IDAtNi40IDIuMi0xMS45IDYuOC0xNi40IDQuNS00LjYgOS45LTYuOCAxNi4yLTYuOCAzLjcgMCA3IC44IDkuOSAyLjMgMyAxLjYgNS42IDMuOSA3LjggN1YxNjhoNS42em0tMjIuOSA0LjNjLTMuMiAwLTYuMS44LTguOCAyLjQtMi43IDEuNi00LjggMy44LTYuNCA2LjYtMS42IDIuOC0yLjQgNS44LTIuNCA5IDAgMy4xLjggNi4xIDIuNCA5IDEuNiAyLjkgMy44IDUuMSA2LjUgNi43IDIuNyAxLjYgNS42IDIuNCA4LjcgMi40IDMuMSAwIDYuMS0uOCA4LjktMi40IDIuOC0xLjYgNS0zLjcgNi41LTYuNHMyLjMtNS43IDIuMy05LjFjMC01LjEtMS43LTkuNS01LjEtMTIuOS0zLjUtMy41LTcuNi01LjMtMTIuNi01LjN6bTQzLjctMjAuOWg1LjdWMTY4aDkuMXY1SDM2OXYzOS42aC01LjdWMTczaC03Ljh2LTVoNy44di0xNi42em0yOC4zLTEuOGMxLjMgMCAyLjQuNSAzLjMgMS40LjkuOSAxLjQgMiAxLjQgMy40IDAgMS4zLS41IDIuNC0xLjQgMy4zLS45LjktMiAxLjQtMy4zIDEuNC0xLjMgMC0yLjQtLjUtMy4zLTEuNC0uOS0uOS0xLjQtMi0xLjQtMy4zIDAtMS4zLjUtMi40IDEuNC0zLjQgMS0uOSAyLjEtMS40IDMuMy0xLjR6bS0yLjggMTguNGg1Ljd2NDQuNWgtNS43VjE2OHptMjAuNSAwaDUuN3Y4YzIuMy0zLjEgNC44LTUuMyA3LjYtNi45IDIuOC0xLjUgNS44LTIuMyA5LjEtMi4zczYuMy44IDguOSAyLjVjMi42IDEuNyA0LjUgNCA1LjcgNi44IDEuMiAyLjkgMS44IDcuMyAxLjggMTMuNHYyMi45aC01Ljd2LTIxLjJjMC01LjEtLjItOC41LS42LTEwLjMtLjctMi45LTEuOS01LjItMy44LTYuNi0xLjktMS41LTQuMy0yLjItNy40LTIuMi0zLjUgMC02LjYgMS4xLTkuMyAzLjQtMi43IDIuMy00LjUgNS4xLTUuNCA4LjUtLjUgMi4yLS44IDYuMi0uOCAxMi4xdjE2LjNoLTUuN1YxNjh6bTkyLjQgMGg1Ljd2MzUuNWMwIDYuMi0uNSAxMC44LTEuNiAxMy43LTEuNSA0LjEtNC4xIDcuMi03LjggOS40cy04LjIgMy4zLTEzLjQgMy4zYy0zLjggMC03LjItLjUtMTAuMy0xLjYtMy0xLjEtNS41LTIuNS03LjQtNC4zLTEuOS0xLjgtMy43LTQuNS01LjMtOGg2LjJjMS43IDIuOSAzLjkgNS4xIDYuNiA2LjUgMi43IDEuNCA2IDIuMSAxMCAyLjEgMy45IDAgNy4yLS43IDkuOS0yLjIgMi43LTEuNSA0LjYtMy4zIDUuOC01LjUgMS4xLTIuMiAxLjctNS44IDEuNy0xMC43VjIwNGMtMi4yIDIuNy00LjggNC44LTcuOSA2LjNzLTYuNCAyLjItOS45IDIuMmMtNC4xIDAtNy45LTEtMTEuNS0zLTMuNi0yLTYuNC00LjgtOC40LTguMi0yLTMuNC0yLjktNy4yLTIuOS0xMS4zIDAtNC4xIDEtOCAzLjEtMTEuNSAyLTMuNiA0LjktNi40IDguNS04LjQgMy42LTIuMSA3LjQtMy4xIDExLjQtMy4xIDMuMyAwIDYuNC43IDkuMyAyLjEgMi45IDEuNCA1LjcgMy42IDguMyA2LjhWMTY4em0tMTYuOCA0LjNjLTMuMiAwLTYuMy44LTkgMi40LTIuOCAxLjYtNSAzLjctNi41IDYuNS0xLjYgMi44LTIuNCA1LjgtMi40IDkgMCA0LjkgMS42IDguOSA0LjkgMTIuMSAzLjMgMy4yIDcuNSA0LjggMTIuNyA0LjggNS4zIDAgOS41LTEuNiAxMi43LTQuNyAzLjItMy4yIDQuOC03LjMgNC44LTEyLjUgMC0zLjQtLjctNi4zLTIuMi05LTEuNS0yLjYtMy42LTQuNy02LjMtNi4yLTIuNy0xLjYtNS42LTIuNC04LjctMi40em02MC4yLjVsLTMuNyAzLjhjLTMuMS0zLTYuMS00LjUtOS00LjUtMS45IDAtMy41LjYtNC44IDEuOC0xLjMgMS4yLTIgMi43LTIgNC4zIDAgMS40LjUgMi44IDEuNiA0LjEgMS4xIDEuMyAzLjQgMi45IDYuOSA0LjcgNC4zIDIuMiA3LjIgNC4zIDguNyA2LjQgMS41IDIuMSAyLjMgNC40IDIuMyA3IDAgMy43LTEuMyA2LjgtMy45IDkuMy0yLjYgMi41LTUuOCAzLjgtOS42IDMuOC0yLjYgMC01LS42LTcuNC0xLjctMi4zLTEuMS00LjMtMi43LTUuOC00LjZsMy42LTQuMWMyLjkgMy4zIDYgNC45IDkuMyA0LjkgMi4zIDAgNC4yLS43IDUuOS0yLjIgMS42LTEuNSAyLjQtMy4yIDIuNC01LjIgMC0xLjYtLjUtMy4xLTEuNi00LjQtMS4xLTEuMy0zLjUtMi44LTcuMi00LjctNC0yLjEtNi44LTQuMS04LjItNi4xLTEuNC0yLTIuMi00LjMtMi4yLTYuOSAwLTMuNCAxLjItNi4yIDMuNS04LjRzNS4yLTMuNCA4LjctMy40YzQuMi4xIDguMyAyLjEgMTIuNSA2LjF6Ii8+PHBhdGggZD0iTTE1OC4xIDIwOEMxMDEgMjI0LjkgNDEgMTkyLjQgMjQgMTM1LjQgNyA3OC4zIDM5LjUgMTguMiA5Ni42IDEuMmw5LjEgMzAuNmMtNDAuMiAxMS45LTYzIDU0LjItNTEuMSA5NC40IDExLjkgNDAuMiA1NC4yIDYzIDk0LjQgNTEuMSA0MC4yLTExLjkgNjMtNTQuMiA1MS4xLTk0LjRsMzAuNi05LjFjMTcgNTcuMS0xNS41IDExNy4yLTcyLjYgMTM0LjIiIG9wYWNpdHk9Ii42IiBmaWxsPSIjZmZmIi8+PC9nPjxnIGlkPSJhenVsX29zY3VybyI+PHBhdGggY2xhc3M9InN0OCIgZD0iTS0xMDUuMS0xOTNoNzkydjYxMmgtNzkyeiIvPjxwYXRoIGNsYXNzPSJzdDgiIGQ9Ik0tMTA1LjEtMTkzaDc5MnY2MTJoLTc5MnoiLz48cGF0aCBjbGFzcz0ic3Q4IiBkPSJNLTEwNS4xLTE5M2g3OTJ2NjEyaC03OTJ6Ii8+PHBhdGggY2xhc3M9InN0MTAiIGQ9Ik0zMjEgMTI4LjZjLTYuOSAzLjctMTQuOCA1LjYtMjMuNSA1LjYtMTcuNSAwLTMwLTExLjktMzAtMjkuNiAwLTE4LjIgMTIuNS0zMC4xIDMwLTMwLjEgOC43IDAgMTYuNSAxLjggMjIuNCA3LjFsLTcuNSA3LjVjLTMuNi0zLjUtOS4yLTUuNS0xNC45LTUuNS0xMS43IDAtMTkuNSA5LTE5LjUgMjAuMyAwIDEyLjEgNy44IDIxLjEgMTkuNSAyMS4xIDUuMSAwIDkuOC0xIDEzLjMtM3YtMTMuNGgtMTEuNnYtOS4ySDMyMXYyOS4yem0xMi01Mi43aDEwLjF2NDcuN2gyNC4ydjkuMkgzMzNWNzUuOXptNjguNy0xLjVjMTcuOC0uMyAzMC4zIDExLjYgMzAuMyAyOS44IDAgMTcuOC0xMi41IDI5LjYtMzAuMyAzMC0xNy41IDAtMzAtMTEuOS0zMC0yOS42LS4xLTE4LjMgMTIuNC0zMC4yIDMwLTMwLjJ6bTAgNTAuNmMxMS44IDAgMTkuNi05IDE5LjYtMjEuMSAwLTExLjMtNy44LTIwLjMtMTkuNi0yMC4zLTExLjcgMC0xOS41IDktMTkuNSAyMC4zIDAgMTIuMSA3LjggMjEuMSAxOS41IDIxLjF6bTM5LjktNDkuMWgyMi4yYzguNiAwIDE3LjQgMy45IDE3LjQgMTQuMyAwIDYuNC00IDEwLjctOS45IDEyLjR2LjJjNy4xLjggMTIuMyA2LjQgMTIuMyAxMy43IDAgMTIuNC0xMC44IDE2LjItMjEuNSAxNi4yaC0yMC41Vjc1Ljl6TTQ1MS43IDk5aDkuMmM2LjcgMCAxMC4xLTIuOSAxMC4xLTcuMSAwLTQuOS0zLjQtNy4zLTExLTcuM2gtOC40Vjk5em0wIDI1LjFoOS4zYzUuMiAwIDEyLjUtLjkgMTIuNS04LjQgMC01LjktMy45LTgtMTItOGgtOS43djE2LjR6TTUxMiA3NS45aDguOGwyNC41IDU2LjloLTExLjZsLTUuMy0xM2gtMjQuN2wtNS4xIDEzaC0xMS4zTDUxMiA3NS45em0xMi45IDM1LjFsLTguOC0yMy4xLTguOSAyMy4xaDE3Ljd6bTI2LjctMzUuMWgxMC4xdjQ3LjdoMjQuMnY5LjJoLTM0LjNWNzUuOXpNMTA3LjggMTgzLjdjLTQxLjkgMC03NS45LTM0LTc1LjktNzUuOSAwLTQxLjkgMzQtNzUuOSA3NS45LTc1LjkgNDEuOSAwIDc1LjkgMzQgNzUuOSA3NS45aDMyQzIxNS43IDQ4LjMgMTY3LjQgMCAxMDcuOCAwIDQ4LjMgMCAwIDQ4LjMgMCAxMDcuOGMwIDU5LjYgNDguMyAxMDcuOCAxMDcuOCAxMDcuOHYtMzEuOXoiLz48L2c+PC9zdmc+"
          $(document).find('.GlobalRatingLogo').attr('src',ep);
          $(document).find('#sinatra-header-inner').addClass("navbar-transparent");
        }
    }, false);
    
    $('#myCarousel').carousel()
    $('#myCarousel2').carousel()

});