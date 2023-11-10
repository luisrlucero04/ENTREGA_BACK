class menumain extends HTMLElement {
    constructor (){
        super();
    }
    connectedCallback(){
        this.innerHTML = ` 
        
        <img src="../img/logo.png" alt="">
        <nav>
            <ul>
                <a href="index.php">
                    <li>
                        <i class="fa-solid fa-coins" title="Planeacion presupuestal del mes"></i>
                    </li>
                </a>
                <a href="modulo2.php">
                    <li>
                        <i class="fa-solid fa-circle-dollar-to-slot" title="Registro de ingresos y gastos"></i>
                    </li>
                </a>
                <a href="modulo3.php">    
                    <li>
                        <i class="fa-solid fa-list-check" title="Administra tus propias categorias"></i>
                    </li>
                </a>
                <a href="modulo4.php">
                    <li>
                        <i class="fa-solid fa-calculator" title="Calculadora de intereses compuestos"></i>
                    </li>
                </a>
                <a href="modulo5.php">    
                    <li>
                        <i class="fa-solid fa-chart-column" title="Dashboard presupuestal"></i>
                    </li>
                </a>
            </ul>
        </nav>
        <a href=" ../db/logout.php">
            <div class="exit">
                <i class="fa-solid fa-right-from-bracket" title="Cerrar sesion"></i>
            </div>
        </a>
        ` ;
    }
}

window.customElements.define("menu-main", menumain)