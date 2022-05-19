@extends('admin.layout.table_form')

@section('table')
    <div class="elements-configuration-element">
        <div class="desktop-two-columns mobile-two-columns">
            <div class="column">
                <div class="elements-configuration-element-subelement">
                    <h4>Nombre: </h4><span class="title">faq 1</span>
                </div>
                <div class="elements-configuration-element-subelement">
                    <h4>Categoría: </h4><span class="title">general</span>
                </div>
                <div class="elements-configuration-element-subelement">
                    <h4>Fecha: </h4><span class="title">20-04-2022</span>
                </div>
            </div>
            <div class="column" style="display: flex;align-items: center;justify-content: flex-end;">
                <div class="pencil">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                    </svg>
                </div>

                <div class="thrash">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                    </svg>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('form')
    
    <div class="administration-editor-menu-nav">
        <div class="desktop-two-columns mobile-two-columns">
            <div class="column">
                <div class="form-sections">
                    <div class="form-sections-element"><span>Contenido</span></div>
                    <div class="form-sections-element"><span>Imágenes</span></div>
                    <div class="form-sections-element"><span>Seo</span></div>
                </div>
            </div>
            <div class="column">

            </div>
        </div>
    </div>
    
    <form action="" method="post">
        <div class="form">
            <div class="desktop-two-columns mobile-two-columns" style="margin-top: 0.6rem;">
                <div class="column">
                    <div class="form-category">
                        <div class="form-category-title">
                            <h3>Categoría</h3>
                        </div>
                        <div class="form-category-result">
                            <select name="category" style="border: 0;border-bottom: 1px solid black;margin-top: 1rem;">
                                <option value="tipo0"></option>
                                <option value="tipo1">Ejemplo1</option>
                                <option value="tipo2">Ejemplo2</option>
                                <option value="tipo3">Ejemplo3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="form-name">
                        <div class="form-name-title">
                            <h3>Nombre</h3>
                        </div>
                        <div class="form-name-result">
                            <select name="name" style="border: 0;border-bottom: 1px solid black;margin-top: 1rem;">
                                <option value="tipo0"></option>
                                <option value="tipo1">Ejemplo1</option>
                                <option value="tipo2">Ejemplo2</option>
                                <option value="tipo3">Ejemplo3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-language">
                <div class="form-language-element"><span>Español</span></div>
                <div class="form-language-element"><span>Inglés</span></div>
            </div>
            <div class="form-content-data">
                <div class="desktop-one-column mobile-one-column">
                    <div class="column">
                        <div class="form-content-data-name">
                            <div class="form-content-data-name-title">
                                <h3>Título</h3>
                            </div>
                            <div class="form-content-data-name-result">
                                <input type="text" name="title" style="border: 0;border-bottom: 1px solid black;margin-top: 1rem;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-content-data-description">
                    <div class="form-content-data-description-title">
                        <h3>Descripción</h3>
                    </div>
                    <div class="form-content-data-description-result">
                        <textarea class="ckeditor" name="description" style="width: 100%;height: 10rem;margin-top: 1rem;"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection


    