@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow-lg">
            <div class="card-header bg-info text-white">
                <h3 class="mb-0">
                    <i class="fas fa-envelope mr-2"></i>Formulario de Contacto
                </h3>
            </div>

            <div class="card-body">
                <div class="row">
                    <!-- Información de contacto -->
                    <div class="col-md-5">
                        <h4 class="text-primary mb-4">
                            <i class="fas fa-address-card mr-2"></i>Información de Contacto
                        </h4>

                        <div class="mb-4">
                            <h5><i class="fas fa-map-marker-alt text-danger mr-2"></i>Dirección</h5>
                            <p class="ml-4">Calle Ejemplo, 123<br>28000 Madrid, España</p>
                        </div>

                        <div class="mb-4">
                            <h5><i class="fas fa-phone text-success mr-2"></i>Teléfono</h5>
                            <p class="ml-4">+34 912 345 678</p>
                        </div>

                        <div class="mb-4">
                            <h5><i class="fas fa-envelope text-warning mr-2"></i>Email</h5>
                            <p class="ml-4">info@mibloglaravel.com</p>
                        </div>

                        <div class="mb-4">
                            <h5><i class="fas fa-clock text-secondary mr-2"></i>Horario</h5>
                            <p class="ml-4">Lunes a Viernes: 9:00 - 18:00</p>
                        </div>

                        <div class="social-links mt-4">
                            <h5><i class="fas fa-share-alt mr-2"></i>Síguenos</h5>
                            <div class="d-flex mt-2">
                                <a href="#" class="btn btn-outline-primary btn-sm mr-2">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-outline-info btn-sm mr-2">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm mr-2">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="btn btn-outline-dark btn-sm">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Formulario -->
                    <div class="col-md-7">
                        <h4 class="text-primary mb-4">
                            <i class="fas fa-paper-plane mr-2"></i>Envíanos un Mensaje
                        </h4>

                        <form>
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nombre">
                                        <i class="fas fa-user mr-1"></i>Nombre *
                                    </label>
                                    <input type="text" class="form-control" id="nombre"
                                           placeholder="Tu nombre" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="apellidos">
                                        <i class="fas fa-user-tag mr-1"></i>Apellidos
                                    </label>
                                    <input type="text" class="form-control" id="apellidos"
                                           placeholder="Tus apellidos">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">
                                        <i class="fas fa-envelope mr-1"></i>Email *
                                    </label>
                                    <input type="email" class="form-control" id="email"
                                           placeholder="tu@email.com" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="telefono">
                                        <i class="fas fa-phone mr-1"></i>Teléfono
                                    </label>
                                    <input type="tel" class="form-control" id="telefono"
                                           placeholder="+34 600 000 000">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="asunto">
                                    <i class="fas fa-tag mr-1"></i>Asunto *
                                </label>
                                <select class="form-control" id="asunto" required>
                                    <option value="" selected disabled>Selecciona un asunto</option>
                                    <option>Información general</option>
                                    <option>Soporte técnico</option>
                                    <option>Colaboración</option>
                                    <option>Publicidad</option>
                                    <option>Otro</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="mensaje">
                                    <i class="fas fa-comment-dots mr-1"></i>Mensaje *
                                </label>
                                <textarea class="form-control" id="mensaje" rows="5"
                                          placeholder="Escribe tu mensaje aquí..." required></textarea>
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="privacidad" required>
                                <label class="form-check-label" for="privacidad">
                                    Acepto la política de privacidad
                                </label>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="reset" class="btn btn-outline-secondary">
                                    <i class="fas fa-redo mr-1"></i>Limpiar
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane mr-1"></i>Enviar Mensaje
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card-footer bg-light">
                <div class="row">
                    <div class="col-md-8">
                        <p class="mb-0 text-muted">
                            <small>
                                <i class="fas fa-info-circle mr-1"></i>
                                Los campos marcados con * son obligatorios. Te responderemos en un plazo máximo de 48 horas.
                            </small>
                        </p>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ route('inicio') }}" class="btn btn-outline-dark btn-sm">
                            <i class="fas fa-home mr-1"></i>Volver al Inicio
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mapa (opcional) -->
        <div class="card mt-4 shadow-sm">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">
                    <i class="fas fa-map-marked-alt mr-2"></i>¿Dónde estamos?
                </h5>
            </div>
            <div class="card-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Puedes incluir un mapa de Google Maps aquí -->
                    <div class="embed-responsive-item bg-light d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <i class="fas fa-map fa-3x text-muted mb-3"></i>
                            <h5>Mapa de Localización</h5>
                            <p class="text-muted">(Aquí iría un mapa interactivo)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Script simple para el formulario (ejemplo)
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Validación simple
            const nombre = document.getElementById('nombre').value;
            const email = document.getElementById('email').value;

            if(nombre && email) {
                alert('¡Gracias por tu mensaje! Te contactaremos pronto.');
                form.reset();
            } else {
                alert('Por favor, completa los campos obligatorios.');
            }
        });
    });
</script>
@endsection
