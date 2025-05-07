@extends('layouts.webtemplate')

@section('title', 'MR Soluciones Digitales | Links de utilidad | Calculadoras')
@section('description', 'Utilidad para estudiantes de Ingeniaría: Links de calculadoras y herramientas útiles para cálculos y análisis de algroritmos y datos.')
@section('keywords', 'calculadoras, herramientas, ingeniería, cálculos, algoritmos, datos, programación, matemáticas')
@section('image', 'https://images.unsplash.com/photo-1581472723648-909f4851d4ae?auto=format&amp;fit=crop&amp;w=800&amp;q=80')

@section('content')
    <section id="calculadoras" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3 ">Links de utilidad</h2>
                <p class="lead text-muted">
                    Utilidad para estudiantes de Ingeniería
                    <br>
                    Links de calculadoras y herramientas útiles para cálculos y análisis de algroritmos y datos.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">

                    <div class="card m-2">
                        <div class="card-header">Cálculo</div>
                        <div class="card-body">
                            <ul>
                                <li><a href="https://mathdf.com/int/es/" target="_blank">Integrales</a> (Normales e impropias)</li>
                                <li><a href="https://mathdf.com/dif/es/" target="_blank">Ecuaciones Diferenciales</a></li>
                                <li><a href="https://es.symbolab.com/solver/series-calculator/" target="_blank">Series</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card m-2">
                        <div class="card-header">Matemática Discreta</div>
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.geogebra.org/m/akmtre4u" target="_blank">Sob(m,n)</a></li>
                                <li><a href="https://es.symbolab.com/solver/polynomial-multiplication-calculator/%5Cleft(1%2Bx%2B2x%5E%7B2%7D%2B3x%5E%7B3%7D%5Cright)%5E%7B4%7D" target="_blank">Calculadora de polinomios</a></li>
                                <li><a href="https://www.wolframalpha.com/input/?i=f%28n%29%3Df%28n-1%29%2Bf%28n-2%29%2C+f%281%29%3D1%2C+f%282%29%3D2" target="_blank">Sucesiones - <b>WolframAlfa</b></a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card m-2">
                        <div class="card-header">Geometría y Álgebra lineal</div>
                        <div class="card-body">
                            <ul>
                                <li><b><a href="https://www.geogebra.org/3d" target="_blank">GeoGebra 3D</a></b></li>
                                <li><b><a href="https://matrixcalc.org/es/" target="_blank">MatrixCalc</a></b></li>
                                <li><a href="https://onlinemschool.com/math/assistance/matrix/multiply/" target="_blank">Producto de
                                        matrices</a><br><i>Recordatorio: al hacer productos de Matrices asociadas a t.l. las coordenas son
                                        matrices columnas</i></li>
                                <li><a href="https://onlinemschool.com/math/assistance/matrix/determinant/" target="_blank">Determinante</a>
                                    (hasta M7x7)</li>
                                <li><a href="https://onlinemschool.com/math/assistance/matrix/inverse/" target="_blank">Matriz inversa</a>
                                    (hasta M7x7)</li>
                                <li><a href="https://onlinemschool.com/math/assistance/vector/length/" target="_blank">Norma de un vector</a>
                                </li>
                                <li><a href="https://onlinemschool.com/math/assistance/vector/multiply/" target="_blank">Producto escalar</a>
                                </li>
                                <li><a href="https://onlinemschool.com/math/assistance/vector/multiply1/" target="_blank">Producto Vectorial</a>
                                </li>
                                <li><a href="https://onlinemschool.com/math/assistance/vector/orthogonality/" target="_blank">Verificar si 2
                                        vectores son ortogonales</a></li>
                                <li><a href="https://onlinemschool.com/math/assistance/vector/basis_inspection/" target="_blank">Verificar si es
                                        una base</a></li>
                                <li><a href="https://onlinemschool.com/math/assistance/vector/basis_expansion/" target="_blank">Coordenadas de
                                        un vector</a></li>
                                <li><a href="https://onlinemschool.com/math/assistance/vector/angl/" target="_blank">Ángulo entre vectores</a>
                                </li>
                                <li><a href="https://onlinemschool.com/math/assistance/vector/cos/" target="_blank">Ángulos de un vector
                                        respecto a ejes x,y,z</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="card m-2">
                        <div class="card-header">Lógica</div>
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.fing.edu.uy/inco/cursos/logica/software/yoda/YodaProp.html" target="_blank">
                                    Yoda - Derivaciones en PROP</a></li>
                                <li><a href="https://www.fing.edu.uy/inco/cursos/logica/software/yoda/YodaPred.html" target="_blank">
                                    Yoda - Derivaciones en PRED</a>
                                    <br><i>Precaución: Los controles sobre E∃ no son certeros.
                                        Deben considerarse todas las hojas no canceladas hasta
                                        la aplicación de esta regla.</i>
                                    </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
