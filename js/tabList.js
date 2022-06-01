
    function openTab(evt, vid_id) {

        var i, checkbox_grid, btn_tab;
    
        checkbox_grid = document.getElementsByClassName("checkbox_grid");
        for (i = 0; i < checkbox_grid.length; i++) {
            checkbox_grid[i].style.display = "none";
        }
    
        btn_tab = document.getElementsByClassName("btn_tab");
        for (i = 0; i < btn_tab.length; i++) {
            btn_tab[i].className = btn_tab[i].className.replace(" active", "");
        }
    
        document.getElementById(vid_id).style.display = "flex";
        evt.currentTarget.className += " active";
    }
    $(document).ready(function () {
    document.getElementById("defaultOpen").click();
    })
