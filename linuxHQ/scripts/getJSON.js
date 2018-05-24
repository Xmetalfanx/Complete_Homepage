var desktops = [
	{
		desktopName:"Cinnamon",
		homepage:"",
		github:"https://github.com/linuxmint/Cinnamon",
		distrosThatUse:"Linux Mint, Manjaro, Fedora, OpenSuse, Debian",
		framework:"gtk3"
	},
	{
		desktopName:"plasma5",
		homepage:"",
		github:"https://github.com/linuxmint/Cinnamon",
		distrosThatUse:"",
		framework:"QT"
	},
	{
		desktopName:"XFCE",
		homepage:"",
		github:"https://github.com/linuxmint/Cinnamon",
		distrosThatUse:"Xubuntu, Linux Lite",
		framework:"gtk2"
	},
	{
		desktopName:"mate",
		homepage:"",
		github:"",
		distrosThatUse:"Ubuntu Mate, Fedora, Linux Mint",
		framework:"gtk3"
	},
]


// Set output var 
var output = '';

for (var i = 0;  i < desktops.length;i++){
	
	console.log(desktops[0]);

	// output += '<ul><li>Desktop Name'+desktops[i].desktopName+'</li></ul>';
}
