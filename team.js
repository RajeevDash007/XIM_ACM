const showSocial = (toggleCard, socialCard) =>{
    const toggle = document.getElementById(toggleCard),
            social = document.getElementById(socialCard);

    toggle.addEventListener("click",()=>{

        if(social.classList.contains("animation")){
            social.classList.add("down-animation")

            setTimeout(() =>{
                social.classList.remove("down-animation")
            },1000)
        }
        social.classList.toggle('animation')

    })
    

}
showSocial('team-toggle','team-social')
showSocial('team1-toggle','team1-social')
showSocial('team2-toggle','team2-social')
showSocial('team3-toggle','team3-social')
showSocial('team4-toggle','team4-social')
showSocial('team5-toggle','team5-social')
showSocial('team6-toggle','team6-social')