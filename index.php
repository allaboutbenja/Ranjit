<?php
    require './database/DatabaseMYSQL.php';
    require './models/Product.php';
    require './models/Category.php';
    require './models/Brand.php';

    $db = new DatabaseMYSQL();
    $products = array();
    $categories = array();
    $brands = array();
    $db->connect();

    $sql = "SELECT * FROM products";
    $resp = $db->query($sql);
    while($rs = mysqli_fetch_array($resp)){
        $products[] = new Product($rs[0],$rs[1],$rs[2],$rs[3],$rs[4],$rs[5],$rs[6],$rs[7]);
    }

    $sql = "SELECT * FROM categories";
    $resp = $db->query($sql);
    while($rs = mysqli_fetch_array($resp)){
        $categories[] = new Category($rs[0],$rs[1]);
    }

    $sql = "SELECT * FROM brands";
    $resp = $db->query($sql);
    while($rs = mysqli_fetch_array($resp)){
        $brands[] = new Brand($rs[0],$rs[1]);
    }
    $db->disconnect();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header>
        <div class="head">
            <div class="head__title">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:serif="http://www.serif.com/" width="100%" height="100%" viewBox="0 0 495 172" version="1.1" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <g transform="matrix(1,0,0,1,-1039.99,-214.495)">
                        <g transform="matrix(1,0,0,1,887,0)">
                            <g id="logo-ranjit" transform="matrix(1,0,0,1,16.0067,82.5102)">
                                <g>
                                    <path d="M407.999,197.878C409.762,189.127 413.707,186.629 418.638,186.629C428.948,186.629 430.502,203.763 430.448,221.497C430.4,237.093 432.103,262.176 414,273L414,277C438.632,276.851 454.555,263.097 457.688,229.497C460.433,200.054 456.672,176.565 437.713,172.251C427.933,170.025 417.1,175.795 407.999,186.763L407.999,185.628C407.999,182.014 406.563,178.547 404.007,175.992C401.452,173.436 397.985,172 394.371,172L392.999,172C381.523,172.156 372.649,176.495 369.33,181.59L371.021,183.281C375.996,178.965 381.084,182.461 380.999,189L380.999,253.621C380.999,259.08 385.424,263.506 390.884,263.506C393.241,263.506 395.757,263.506 398.114,263.506C403.573,263.506 407.999,259.08 407.999,253.621L407.999,197.878Z" style="fill:white;"/>
                                </g>
                                <g>
                                    <path id="mmm" d="M515.331,181.59L517.023,183.281C521.997,178.965 527.085,182.461 527,189L527,253.621C527,259.08 531.426,263.506 536.885,263.506C539.242,263.506 541.758,263.506 544.115,263.506C549.574,263.506 554,259.08 554,253.621C554,237.195 554,204.248 554,185.628C554,182.014 552.564,178.547 550.008,175.992C547.453,173.436 543.986,172 540.372,172L539,172C527.524,172.156 518.65,176.495 515.331,181.59Z" style="fill:white;"/>
                                    <g transform="matrix(1.12,0,0,1.12,-66.24,-21.04)">
                                        <circle cx="539.5" cy="154.5" r="12.5" style="fill:white;"/>
                                    </g>
                                </g>
                                <g>
                                    <g id="mmm1" serif:id="mmm" transform="matrix(1,0,0,1,-50,0)">
                                        <path d="M515.331,181.59L517.023,183.281C521.997,178.965 527.085,182.461 527,189C527,189 527,189 527,253.621C527,264.809 526.075,277.29 515.73,285.472C512.257,288.218 498.551,294.435 492.447,288.523C486.881,283.133 478.261,281.876 475.56,288.204C472.824,294.613 477.674,297.973 481.885,300C484.67,301.341 511.164,307.66 530.115,296.506C550.331,284.607 554,262.08 554,243.621C554,227.195 554,204.248 554,185.628C554,182.014 552.564,178.547 550.008,175.992C547.453,173.436 543.986,172 540.372,172L539,172C527.524,172.156 518.65,176.495 515.331,181.59Z" style="fill:white;"/>
                                    </g>
                                    <g transform="matrix(1.12,0,0,1.12,-116.24,-21.04)">
                                        <circle cx="539.5" cy="154.5" r="12.5" style="fill:white;"/>
                                    </g>
                                </g>
                                <path d="M604,243C603.619,255.456 613.88,255.921 620,243L623,245C617.064,256.313 613.261,262.936 599.628,263.483C591.883,263.794 577.34,261.027 577,245L577,180L567,180L567,173C582.216,170.651 591.437,162.663 597,148L604,148L604,173L621,173C623.68,173.142 626.589,169.863 623,169C621.36,168.606 618.929,168.046 618.929,163.707C618.929,159.368 625.291,157.952 628.217,160.302C630.295,161.972 631,165.562 631,168C631,173.87 627.094,179.454 621.146,179.854L604,179.854L604,243Z" style="fill:white;"/>
                                <path id="vv" d="M356.331,200.027C356.331,184.548 349.783,176 330.304,173C326.448,172.406 312.311,171.522 303.608,175.535C299.865,177.261 293.793,181.023 291.951,186.944C289.918,193.475 291.516,198.074 293.092,199.908C299.216,207.038 307.486,204.611 310.063,200C310.659,198.934 312.568,194.526 310.112,191.923C305.911,187.472 299.806,190.074 303.384,185C307.583,179.047 314.1,178.74 317.73,179.345C323.08,180.235 327.127,181.963 329.743,188.795C331.054,192.22 329.552,198.805 329.331,199C324.856,211.978 292.461,210.162 285.492,230.96C280.561,245.674 285.506,258.127 303.202,263.506C314.817,265.844 324.451,258.417 329.501,252.918C332.065,252.471 331.278,257.469 333.323,259.514C335.878,262.07 339.345,263.506 342.959,263.506L344.331,263.506C355.807,263.349 364.681,259.011 368,253.916L366.309,252.225C361.334,256.54 356.246,253.045 356.331,246.506L356.331,200.027ZM330,217.057C330,215.904 329.564,214.798 328.787,213.983C328.011,213.168 326.957,212.709 325.859,212.709C325.858,212.709 325.858,212.709 325.857,212.709C321.652,212.709 317.618,214.464 314.644,217.586C311.671,220.709 310,226.944 310,231.359C310,235.142 310,237.057 310,240.5C310,246.299 314.477,251 320,251L320,251C325.523,251 330,246.299 330,240.5L330,217.057Z" style="fill:white;"/>
                                <path id="mmm2" serif:id="mmm" d="M214,196.085C219.179,196.235 223.958,196.238 227.879,192.595C235.081,185.903 235.037,162.037 233.896,155C231.037,137.358 215.425,137.856 212.017,142.017C210.86,143.431 210,145.061 210,146.888L210,132C210,132 210.816,132 211.5,132C247.002,132 261,146.998 261,165.5L261,165.5C261,182.291 250.94,194.049 237.131,197.756C242.915,200.13 248.242,205.354 253,215L277,261C283.874,275.155 291.639,280.934 297.483,282.09C300.124,282.612 302.462,282.279 304.5,281.699L304.5,284.728C284.986,294.451 266.297,294.704 247,262L214,199L214,196.085ZM180.905,148L180.905,254.064C180.905,259.523 185.674,263.948 191.557,263.948C194.097,263.948 196.808,263.948 199.348,263.948C205.231,263.948 210,259.523 210,254.064L210,132C201.468,132 137.782,130.182 137,166.381C136.97,167.768 137,169.13 137,170.451C137,174.84 138.743,179.05 141.847,182.153C144.95,185.257 149.16,187 153.549,187C153.549,187 160.586,188.329 167.083,182.314C170.579,179.077 170.892,172.907 169.381,169.04C167.894,165.234 164.64,163.691 160.916,165.5C159.218,166.325 158.246,168.717 155.045,169.218C151.02,169.847 147.253,167.514 147.424,161.1C147.689,151.173 158.83,144.155 168.397,142.858C175.211,141.934 180.869,142.626 180.905,148Z" style="fill:white;"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="head__input">
                <img src="./assets/images/buscar-white.png" alt="search">
                <input type="text" title="search" placeholder="Buscar...">
            </div>
            <div class="head__carrito">
                <img onclick="toggleCarshop()" src="./assets/images/carrito-de-compras.png" alt="carrito">
            </div>
        </div>

        <div class="carshop" id="carshop">
            <h4>Carrito Ranjit</h4>
            <ul class="carshop__products" id="listProductsCarshop">
                <template id="product-carshop-template">
                    <li>
                        <div class="product__stock">
                            <button class="carshop__add"> + </button>
                            <p class="carshop__cant">1</p>
                            <button class="carshop__remove"> - </button>
                        </div>
                        <img src="./assets/images/alfajor.jpg" title="img" class="carshop__img"/>
                        <div>
                            <h6 class="carshop__title">Alfajor con manjar</h6>
                            <p class="carshop__price">$2990</p>
                        </div>
                    </li>
                </template>
            </ul>
            <div class="carshop__footer">
                <!-- <a 
                    class="send-button" 
                    href="https://api.whatsapp.com/send?phone=56920085211&text=Hola&type=phone_number&app_absent=0" 
                    target="_blank"
                    onclick="sendMessageWsp()"
                    >
                    Hacer pedido
                    <img src="./assets/images/whatsapp.png" title="img"/>
                </a> -->
                <span
                    class="send-button" 
                    id="send-button-msg-wsp"
                    onclick="sendMessageWsp()"
                    >
                    Hacer pedido
                    <img src="./assets/images/whatsapp.png" title="img"/>
                </span>
            </div>
        </div>
        <div class="shadow-carshop" id="shadow-carshop" onclick="toggleCarshop()"></div>

        <div class="header__title">
            <h1>Almacén Saludable</h1>
            <span>Natural - Vegano - Sin Gluten</span>
        </div>
        <div class="header__redes">
            <img src="./assets/images/instagram.png" alt="">
            <img src="./assets/images/facebook.png" alt="">
            <img src="./assets/images/whatsapp.png" alt="">
        </div>
    </header>
    <section class="search">
        <select name="order" id="orderSelect" title="order" class="select">
            <option value="#">Orden por defecto</option>
            <option value="#">Orden por defecto</option>
            <option value="#">Orden por defecto</option>
            <option value="#">Orden por defecto</option>
        </select>
    </section>
    <section class="content">
        <!-- <div class="filter">

        </div> -->
        <div class="products">
            <div class="content">

                <?php
                    foreach($products as $product){
                        echo "
                            <div class='product'>
                                <img src='data:image/gif;base64,".$product->getImage()."' alt='Producto'>
                                <div class='product-body'>
                                    <h6>".$product->getTitle()."</h6>
                                    <span class='product__cant'>(".$product->getStock()." unidades)</span>
                                    <span class='product__price'>".$product->getPrice()."</span>
                                </div>
                                <button class='button' onclick='addCarshop(
                                    \"".str_replace('"', '\"', $product->getId()) ."\",
                                    \"".str_replace('"', '\"', $product->getTitle()) ."\",
                                    \"".str_replace('"', '\"', $product->getStock()) ."\",
                                    \"".str_replace('"', '\"', $product->getPrice()) ."\",
                                    \"".str_replace('"', '\"', $product->getImage()) ."\",
                                    )'>Agregar al carrito</button> 
                            </div>
                        ";
                    }
                    
                ?>
            </div>
        </div>
    </section>
    <footer>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:serif="http://www.serif.com/" width="100%" height="100%" viewBox="0 0 495 172" version="1.1" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <g transform="matrix(1,0,0,1,-152.993,-220.766)">
                    <g transform="matrix(1,0,0,1,0,6.27135)">
                        <g id="logo-ranjit" transform="matrix(1,0,0,1,16.0067,82.5102)">
                            <g>
                                <path d="M407.999,197.878C409.762,189.127 413.707,186.629 418.638,186.629C428.948,186.629 430.502,203.763 430.448,221.497C430.4,237.093 432.103,262.176 414,273L414,277C438.632,276.851 454.555,263.097 457.688,229.497C460.433,200.054 456.672,176.565 437.713,172.251C427.933,170.025 417.1,175.795 407.999,186.763L407.999,185.628C407.999,182.014 406.563,178.547 404.007,175.992C401.452,173.436 397.985,172 394.371,172L392.999,172C381.523,172.156 372.649,176.495 369.33,181.59L371.021,183.281C375.996,178.965 381.084,182.461 380.999,189L380.999,253.621C380.999,259.08 385.424,263.506 390.884,263.506C393.241,263.506 395.757,263.506 398.114,263.506C403.573,263.506 407.999,259.08 407.999,253.621L407.999,197.878Z"/>
                            </g>
                            <g>
                                <path id="mmm" d="M515.331,181.59L517.023,183.281C521.997,178.965 527.085,182.461 527,189L527,253.621C527,259.08 531.426,263.506 536.885,263.506C539.242,263.506 541.758,263.506 544.115,263.506C549.574,263.506 554,259.08 554,253.621C554,237.195 554,204.248 554,185.628C554,182.014 552.564,178.547 550.008,175.992C547.453,173.436 543.986,172 540.372,172L539,172C527.524,172.156 518.65,176.495 515.331,181.59Z"/>
                                <g transform="matrix(1.12,0,0,1.12,-66.24,-21.04)">
                                    <circle cx="539.5" cy="154.5" r="12.5"/>
                                </g>
                            </g>
                            <g>
                                <g id="mmm1" serif:id="mmm" transform="matrix(1,0,0,1,-50,0)">
                                    <path d="M515.331,181.59L517.023,183.281C521.997,178.965 527.085,182.461 527,189C527,189 527,189 527,253.621C527,264.809 526.075,277.29 515.73,285.472C512.257,288.218 498.551,294.435 492.447,288.523C486.881,283.133 478.261,281.876 475.56,288.204C472.824,294.613 477.674,297.973 481.885,300C484.67,301.341 511.164,307.66 530.115,296.506C550.331,284.607 554,262.08 554,243.621C554,227.195 554,204.248 554,185.628C554,182.014 552.564,178.547 550.008,175.992C547.453,173.436 543.986,172 540.372,172L539,172C527.524,172.156 518.65,176.495 515.331,181.59Z"/>
                                </g>
                                <g transform="matrix(1.12,0,0,1.12,-116.24,-21.04)">
                                    <circle cx="539.5" cy="154.5" r="12.5"/>
                                </g>
                            </g>
                            <path d="M604,243C603.619,255.456 613.88,255.921 620,243L623,245C617.064,256.313 613.261,262.936 599.628,263.483C591.883,263.794 577.34,261.027 577,245L577,180L567,180L567,173C582.216,170.651 591.437,162.663 597,148L604,148L604,173L621,173C623.68,173.142 626.589,169.863 623,169C621.36,168.606 618.929,168.046 618.929,163.707C618.929,159.368 625.291,157.952 628.217,160.302C630.295,161.972 631,165.562 631,168C631,173.87 627.094,179.454 621.146,179.854L604,179.854L604,243Z"/>
                            <path id="vv" d="M356.331,200.027C356.331,184.548 349.783,176 330.304,173C326.448,172.406 312.311,171.522 303.608,175.535C299.865,177.261 293.793,181.023 291.951,186.944C289.918,193.475 291.516,198.074 293.092,199.908C299.216,207.038 307.486,204.611 310.063,200C310.659,198.934 312.568,194.526 310.112,191.923C305.911,187.472 299.806,190.074 303.384,185C307.583,179.047 314.1,178.74 317.73,179.345C323.08,180.235 327.127,181.963 329.743,188.795C331.054,192.22 329.552,198.805 329.331,199C324.856,211.978 292.461,210.162 285.492,230.96C280.561,245.674 285.506,258.127 303.202,263.506C314.817,265.844 324.451,258.417 329.501,252.918C332.065,252.471 331.278,257.469 333.323,259.514C335.878,262.07 339.345,263.506 342.959,263.506L344.331,263.506C355.807,263.349 364.681,259.011 368,253.916L366.309,252.225C361.334,256.54 356.246,253.045 356.331,246.506L356.331,200.027ZM330,217.057C330,215.904 329.564,214.798 328.787,213.983C328.011,213.168 326.957,212.709 325.859,212.709C325.858,212.709 325.858,212.709 325.857,212.709C321.652,212.709 317.618,214.464 314.644,217.586C311.671,220.709 310,226.944 310,231.359C310,235.142 310,237.057 310,240.5C310,246.299 314.477,251 320,251L320,251C325.523,251 330,246.299 330,240.5L330,217.057Z"/>
                            <path id="mmm2" serif:id="mmm" d="M214,196.085C219.179,196.235 223.958,196.238 227.879,192.595C235.081,185.903 235.037,162.037 233.896,155C231.037,137.358 215.425,137.856 212.017,142.017C210.86,143.431 210,145.061 210,146.888L210,132C210,132 210.816,132 211.5,132C247.002,132 261,146.998 261,165.5L261,165.5C261,182.291 250.94,194.049 237.131,197.756C242.915,200.13 248.242,205.354 253,215L277,261C283.874,275.155 291.639,280.934 297.483,282.09C300.124,282.612 302.462,282.279 304.5,281.699L304.5,284.728C284.986,294.451 266.297,294.704 247,262L214,199L214,196.085ZM180.905,148L180.905,254.064C180.905,259.523 185.674,263.948 191.557,263.948C194.097,263.948 196.808,263.948 199.348,263.948C205.231,263.948 210,259.523 210,254.064L210,132C201.468,132 137.782,130.182 137,166.381C136.97,167.768 137,169.13 137,170.451C137,174.84 138.743,179.05 141.847,182.153C144.95,185.257 149.16,187 153.549,187C153.549,187 160.586,188.329 167.083,182.314C170.579,179.077 170.892,172.907 169.381,169.04C167.894,165.234 164.64,163.691 160.916,165.5C159.218,166.325 158.246,168.717 155.045,169.218C151.02,169.847 147.253,167.514 147.424,161.1C147.689,151.173 158.83,144.155 168.397,142.858C175.211,141.934 180.869,142.626 180.905,148Z"/>
                        </g>
                    </g>
                </g>
            </svg>
            <ul>
                <li>Rubio #120, Rancagua</li>
                <li>Chile</li>
                <li>Ventas@rajit.cl</li>
            </ul>
            <ul>
                <li>Horario de Atención Local</li>
                <br>
                <li>Lunes a Viernes 10:00 a 18:00</li>
                <br>
                <li>Sábado 11:00 a 14:00</li>
            </ul>
        </div>
        <div>
            <h6>Subscribete</h6>
            <div>
                <input type="text" placeholder="Email">
                <button type="button" class="button">Subscribirse</button>
            </div>
        </div>
    </footer>
    <script src="./js/main.js"></script>
    <script>
        const addCarshop = (id,title,stock,price,image) => {
            const product = { title, stock:Number(stock), price, image }
            const listProductsCarshop$ = document.getElementById('listProductsCarshop');
            const $template = document.getElementById("product-carshop-template").content;
            const $fragment = document.createDocumentFragment();
            $template.querySelector(".carshop__title").textContent = title;
            $template.querySelector(".carshop__img").src = 'data:image/gif;base64,'+image;
            $template.querySelector(".carshop__price").textContent = price;
            
            $template.querySelector(".carshop__add").setAttribute('onclick',`addCant(${id},${stock})`)
            $template.querySelector(".carshop__cant").setAttribute('id',`carshop-${id}`)
            $template.querySelector(".carshop__remove").setAttribute('onclick',`removeCant(${id})`)

            let $clone = document.importNode($template,true);
            $fragment.appendChild($clone);
            listProductsCarshop$.appendChild($fragment)
            showMessage('Producto agregado');
        }
        const addCant = (id,stock) =>{
            const cant$ = document.getElementById(`carshop-${id}`)
            if(+cant$.textContent !== stock){
                cant$.textContent = +cant$.textContent + 1
            }else{
                showMessage('No existe mas stock','warning')
            }
        }
        const removeCant = (id) => {
            const cant$ = document.getElementById(`carshop-${id}`)
            if(+cant$.textContent === 1){
                cant$.parentElement.parentElement.remove()
                showMessage('Producto borrado','warning')
            }else{
                cant$.textContent = +cant$.textContent - 1
            }
        }

        const sendMessageWsp = () => {
            const $carshopProducts = document.getElementById('listProductsCarshop');
            const $listProducts = [...$carshopProducts.querySelectorAll('li')];
            const products = []

            $listProducts.map(({children})=>{
                const product = {
                    name: children[2].children[0].innerText,
                    cant: +children[0].children[1].innerText,
                    price: +children[2].children[1].innerText,
                }
                products.push(product)
            })
            let msgProducts = '';
            products.forEach(({name,cant,price}) => {
                msgProducts += `${name} (${cant}) unidades por ${price} cada una, `
            })
            const msg = `Hola quisiera comprar ${msgProducts}`
            const $a = document.createElement('a')
            $a.setAttribute('href',`https://api.whatsapp.com/send?phone=56920085211&text=${msg}&type=phone_number&app_absent=0`)
            $a.setAttribute('target','_blank')
            $a.click()
        }
    </script>
</body>
</html>
