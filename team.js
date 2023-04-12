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
showSocial("team7-toggle", "team7-social")
showSocial("team8-toggle","team8-social")
showSocial("team9-toggle", "team9-social")
showSocial("TOGGLE10", "SOCIAL10")
showSocial("TOGGLE11", "SOCIAL11")
showSocial("TOGGLE12", "SOCIAL12")
showSocial("TOGGLE13", "SOCIAL13")
showSocial("TOGGLE14", "SOCIAL14")
showSocial("TOGGLE15", "SOCIAL15")
showSocial("TOGGLE16", "SOCIAL16")
showSocial("TOGGLE17", "SOCIAL17")


