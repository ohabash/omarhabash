


	var camera, scene, renderer,
    geometry, material, mesh;
 
init();
animate(); 

function init() {
    

    clock = new THREE.Clock();

    renderer = new THREE.WebGLRenderer({alpha: true});
    renderer.setSize( window.innerWidth, window.innerHeight );

    scene = new THREE.Scene();
 
    camera = new THREE.PerspectiveCamera( 100, window.innerWidth / window.innerHeight, 1, 10000 );
    camera.position.z = 1000;
    // scene.add( camera );
 
    
 
    textGeo = new THREE.PlaneGeometry(300,300);
    THREE.ImageUtils.crossOrigin = ''; //Need this to pull in crossdomain images from AWS
    textTexture = THREE.ImageUtils.loadTexture('https://s3-us-west-2.amazonaws.com/s.cdpn.io/95637/quickText.png');
    textMaterial = new THREE.MeshLambertMaterial({color: 0xffffff, opacity: 1, map: textTexture, transparent: true, blending: THREE.AdditiveBlending})
    text = new THREE.Mesh(textGeo,textMaterial);
    text.position.z = 800;
    // scene.add(text);

    
  
    smokeTexture = THREE.ImageUtils.loadTexture('https://s3-us-west-2.amazonaws.com/s.cdpn.io/95637/Smoke-Element.png');
    smokeMaterial = new THREE.MeshLambertMaterial({color: 0x00ff00, opacity: 0.2, map: smokeTexture, transparent: true});
    smokeGeo = new THREE.PlaneGeometry(300,300);
    smokeParticles = [];


    for (p = 0; p < 150; p++) {
        var particle = new THREE.Mesh(smokeGeo,smokeMaterial);
        particle.position.set(Math.random()*500-250,Math.random()*100-250,Math.random()*1000-100);
        particle.rotation.z = Math.random() * 360;
        scene.add(particle);
        smokeParticles.push(particle);
    }
 
    $('.smoke').append( renderer.domElement );
 
}
 
function animate() {
    // note: three.js includes requestAnimationFrame shim
    delta = clock.getDelta();
    requestAnimationFrame( animate );
    evolveSmoke();
    render();
}
 
function evolveSmoke() {
    var sp = smokeParticles.length;
    while(sp--) {
        smokeParticles[sp].rotation.z += (delta * 0.2);
    }
}

function render() {
 
    renderer.render( scene, camera );
 
}