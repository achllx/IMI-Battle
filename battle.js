function basic(){
    //take value from player
    var hp = document.getElementById('Php').innerHTML;
    var atk = document.getElementById('Patk').innerHTML;
    var def = document.getElementById('Pdef').innerHTML;

    //take value from enemy
    var hp1 = document.getElementById('Ehp').innerHTML;
    var atk1 = document.getElementById('Eatk').innerHTML;
    var def1 = document. getElementById('Edef').innerHTML;

    //dmg
    var dmg = atk - def1;
    var dmg1 = atk1 - def;

    if(dmg<0 && dmg1<0){
        dmg,dmg1 = 1;
    }
    else if(dmg<0){
        dmg=1;
    }
    else if(dmg1<0){
        dmg1=1;
    }

    //health reduce
    var health = hp - dmg1;
    var health1 = hp1 - dmg;

    var x = new XMLHttpRequest();
    var a = document.getElementById('battle_message');
    x.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            alert(this.responseText);
            location.reload();
        }
    };
    x.open('GET', "basic.php?a="+dmg+"&a1="+dmg1+"&b="+health+"&b1="+health1, true);
    x.send();
}

function skill(){
    //take value from player
    var hp = document.getElementById('Php').innerHTML;
    var mp = document.getElementById('Pmp').innerHTML;
    var atk = document.getElementById('Patk').innerHTML;
    var def = document.getElementById('Pdef').innerHTML;
    
    //take value from enemy
    var hp1 = document.getElementById('Ehp').innerHTML;
    var mp1 = document.getElementById('Emp').innerHTML;
    var atk1 = document.getElementById('Eatk').innerHTML;
    var def1 = document. getElementById('Edef').innerHTML;

    // mp consume
    // 1 = 10, 2 = 20, 3 = 30
    var num = Math.floor(Math.random()*3)+1;
    var num1 = Math.floor(Math.random()*3)+1;
    
    var dmg,dmg1;
    //player skill
    if(num == 1){
        mp -= 10;
        if(mp>=0){
            dmg=atk*1.5-def1;
        }else{
            alert("Your Mana is not enought");
            dmg=0;
            mp=0;
        }
    }
    else if(num == 2){
        
        mp -= 20;
        if(mp>=0){
            dmg=atk*2-def1;
        }else{
            alert("Your Mana is not enought");
            dmg=0;
            mp=0;
        }
    }
    else{
        mp -= 30;
        if(mp>=0){
            dmg=atk*3-def1;
        }else{
            alert("Your Mana is not enought");
            dmg=0;
            mp=0;
        }
    }

        //enemy
    if(num1 == 1){
        mp1 -= 10;
        if(mp1>=0){
            dmg1=atk1*1.5-def;
        }else{
            dmg1=0;
            mp1=0;
        }
    }
    else if(num1 == 2){
        mp1 -= 20;
        if(mp1>=0){
            dmg1=atk1*2-def;
        }else{
            dmg1=0;
            mp1=0;
        }
    }
    else{
        mp1 -= 30;
        if(mp1>=0){
            dmg1=atk1*3-def;
        }else{
            dmg1=0;
            mp1=0;
        }
    }

    //dmg cant minus
    if(dmg<0 && dmg1<0){
        dmg,dmg1 = 1;
    }
    else if(dmg<0){
        dmg=1;
    }
    else if(dmg1<0){
        dmg1=1;
    }

    var health = hp - dmg1;
    var health1 = hp1 - dmg;

    var x = new XMLHttpRequest();
    var a = document.getElementById('battle_message');
    x.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            alert(this.responseText);
            location.reload();
        }
    };
    x.open('GET', "skill.php?a="+dmg+"&a1="+dmg1+"&b="+health+"&b1="+health1+"&c="+mp+"&c1="+mp1, true);
    x.send();
}