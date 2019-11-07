$(document).ready(function() {
      $(function() {
          $('.selectpicker').selectpicker();
      });

     console.log('entro');
     $("button[name='terminari']").click(function(e){
          console.log('entro en terminari');
                  e.preventDefault();
                  quef="domicilio";
                  if (formd.checkValidity() === false) {
                    apaga_pills();
                    prende_pills(quef);
                    crearMensaje(true,"Atención", ' Hay errores en la sección Inmueble-Domicilio completo');
                    formd.classList.add('was-validated');
                    return;
                  } else { $('#v-pills-'+quef+'-tab').children()[0].classList.remove('d-none'); }

                  quef="informacion-inmueble";
                  if (formi.checkValidity() === false) {
                    apaga_pills();
                    prende_pills(quef);
                    crearMensaje(true,"Atención", ' Hay errores en la sección Inmueble-Información');
                    formi.classList.add('was-validated');
                    return;
                  } else { $('#v-pills-'+quef+'-tab').children()[0].classList.remove('d-none'); }

                  quef="poblacion";
                  if (formp.checkValidity() === false) {
                    apaga_pills();
                    prende_pills(quef);
                    crearMensaje(true,"Atención", ' Hay errores en la sección Inmueble-Población');
                    formp.classList.add('was-validated');
                    return;
                  } else { $('#v-pills-'+quef+'-tab').children()[0].classList.remove('d-none'); }

                  quef="construccion";
                  if (formc.checkValidity() === false) {
                    apaga_pills();
                    prende_pills("construccion");
                    crearMensaje(true,"Atención", ' Hay errores en la sección Inmueble-Construcción y estructura');
                    formc.classList.add('was-validated');
                    return;
                  } else { $('#v-pills-'+quef+'-tab').children()[0].classList.remove('d-none'); }

/*
                  quef="punto";
                  if (formpr.checkValidity() === false) {
                    apaga_pills();
                    prende_pills("punto");
                    crearMensaje(true,"Atención", ' Hay errores en la sección Inmueble-Punto de reunión');
                    formpr.classList.add('was-validated');
                    return;
                  } else { $('#v-pills-'+quef+'-tab').children()[0].classList.remove('d-none'); }
*/

                  if (validaarchivos('f_analisis') === false) {
                  } else { $('#v-pills-analisis-tab').children()[0].classList.remove('d-none'); };

                  if (validaarchivos('f_reduccion') === false) {
                  } else { $('#v-pills-reduccion-tab').children()[0].classList.remove('d-none'); };

                  var checkedpcd = $('input[type="checkbox"][name="pcd"]:checked').length;
                  if (validaarchivos('f_contingencias')=== false || !checkedpcd) {
                    apaga_pills();
                    prende_pills("contingencias");
                    crearMensaje(true,"Atención", ' Hay errores en la sección Acciones Planeadas-Plan de contingencias');
                    $('form[id="f_contingencias"]')[0].classList.add('was-validated');
                    return;
                  } else { $('#v-pills-contingencias-tab').children()[0].classList.remove('d-none'); };
                
                  if (validaarchivos('f_continuidad') === false) {
                  } else { $('#v-pills-continuidad-tab').children()[0].classList.remove('d-none'); };
                  if (validaarchivos('f_documentos') === false) {
                  } else { $('#v-pills-documentos-tab').children()[0].classList.remove('d-none'); };


                  var Data1 = {
                        estatus : 1,
                        rfc : $('#rfc')[0].value,
                        email_acreditado : $('#nombre-usuario').data('email'),
                        pantalla : formpr.id
                    };

                    $.ajax({
                       type: 'put',
                       url: mipath()+'api/inmuebles/'+formd.dataset.id,
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       data: Data1,
                       success: function(data){
                             console.log('exito terminari');
                             location.href = base_url+"/registro-inmueble-exitoso/"+formd.dataset.id;
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          console.log('error terminari');
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                              if (x.substr(0,6)=="Faltan") {
                                     crearMensaje(true,"Error: ", x+' '+errores[x].descripcion,3000);
                                     if ('id' in errores[x]) {
                                        quepills=$('#id_file_'+('0000' + errores[x].id).slice(-4))[0].closest('form').closest('div').id.replace('v-pills-','');
                                        apaga_pills();
                                        prende_pills(quepills);
                                        $('#id_file_'+('0000' + errores[x].id).slice(-4)).focus();
                                     }
                                     if ('descripcion' in errores[x]) {
                                        if (errores[x].descripcion.indexOf('simulacro')!=-1) {
                                           apaga_pills();
                                           prende_pills('simulacros');
                                       } 
                                     }
                                     if ('descripcion' in errores[x]) {
                                        if (errores[x].descripcion.indexOf('punto de reuni')!=-1) {
                                           apaga_pills();
                                           prende_pills('punto');
                                       }
                                     }

                              } else {
                                     crearMensaje(true,"Error: ", errores[x],3000);
                                     break;
                             }
                          }
                       }
                    });
     });

     if ($('form[id="f_contingencias"]')[0]!=undefined && $('form[id="f_contingencias"]')[0].id=='f_contingencias') {
        var f_contingencias = $('form[id="f_contingencias"]')[0];
        $("#guardarcontingencia").click(function(e){
                  e.preventDefault();

                  var checkedpcd = $('input[type="checkbox"][name="pcd"]:checked').length;
                  if (!checkedpcd) {
                     crearMensaje(false,"Atención", ' Al menos debe seleccionar un procedimiento contemplado en el documento');
                     return;
                  }
$("input[name='tipopersona']:checked").val()
                  var Data1 = {
                        pcd_sismo : $('#pcd_sismo:checked').val(),
                        pcd_incendio : $('#pcd_incendio:checked').val(),
                        pcd_inundacion : $('#pcd_inundacion:checked').val(),
                        pcd_erupcion : $('#pcd_erupcion:checked').val(),
                        pcd_amenazabomba : $('#pcd_amenazabomba:checked').val(),
                        pcd_restablecimiento : $('#pcd_restablecimiento:checked').val(),
                        rfc : $('#rfc')[0].value,
                        email_acreditado : $('#nombre-usuario').data('email'),
                        pantalla : formc.id
                    };

                    $.ajax({
                       type: 'put',
                       url: mipath()+'api/inmuebles/'+formd.dataset.id,
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       data: Data1,
                       success: function(data){
                             $('#v-pills-contingencias')[0].classList.remove('active');
                             $('#v-pills-contingencias')[0].classList.remove('show')
                             $('#v-pills-contingencias-tab')[0].classList.remove('active');
                             $('#v-pills-contingencias-tab').children()[0].classList.remove('d-none'); 
                             $('#v-pills-continuidad')[0].classList.add('active');
                             $('#v-pills-continuidad')[0].classList.add('show')
                             $('#v-pills-continuidad-tab')[0].classList.add('active')
                             if (formd.dataset.id=='' && data.id!='') {
                                 formd.dataset.id=data.id;
                             }
                             crearMensaje(false,"Atención", ' Se actualizó información del construccion y estructura');
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                                     crearMensaje(true,"Error ", errores[x]);
                                     break;
                          }
                       }
                    });
        });
     }

     $("button[id^='guardar_']").click(function(e){
                            e.preventDefault();
                            console.log('entro en boton');
                            $('#v-pills-'+this.dataset.posicion)[0].classList.remove('active');
                            $('#v-pills-'+this.dataset.posicion)[0].classList.remove('show')
                            $('#v-pills-'+this.dataset.posicion+'-tab')[0].classList.remove('active');
                            $('#v-pills-'+this.dataset.siguiente)[0].classList.add('active');
                            $('#v-pills-'+this.dataset.siguiente)[0].classList.add('show')
                            $('#v-pills-'+this.dataset.siguiente+'-tab')[0].classList.add('active')
                            if (validaarchivos(e.currentTarget.closest('form').id)) {
                               $('#v-pills-'+this.dataset.posicion+'-tab').children()[0].classList.remove('d-none');
                            }
                            if ('siguienteseccion' in this.dataset) {
                                $('#menu-'+this.dataset.siguienteseccion)[0].classList.remove('collapsed')
                                $('#menu-'+this.dataset.siguienteseccion)[0].classList.add('active')
                                $('#c_'+this.dataset.siguienteseccion)[0].classList.add('show');  /* colapsse */
                            }
      });

     $("input[type=file][id^='s_id_'").change(function(e){
                  $("#l_"+this.id)[0].innerHTML=this.files[0].name;
     });

     $("input[type=file][id^='id_'").change(function(e){
                  var nombre=this.files[0].name;
                  var id=this.id;
                  var quediv=$($("#l_" + this.id)[0].closest('div'));
                  var archivo=$("#l_" + this.id)[0].id.split('_')[3];
                  var Data1 = {
                        file : this.files[0],
                  };
                  var fd = new FormData();
                  fd.append(this.id,this.files[0]);
                  fd.append('rfc',$('#rfc')[0].value);
                  fd.append('email_acreditado',$('#nombre-usuario').data('email'));
                  fd.append('pantalla',this.closest('form').id);
                    $.ajax({
                       type: 'post',
                       url: mipath()+'api/inmuebles/'+formd.dataset.id,
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       contentType: false,
                       processData: false,
                       cache:       false,
                       data : fd,
                       success: function(data){
                             if (formd.dataset.id=='' && data.id!='') {
                                 formd.dataset.id=data.id;
                             }
                             $("#l_"+id)[0].innerHTML=nombre;
                             crearBotonDescarga(data.filesystem['filesystem_'+archivo],quediv);

                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                                     crearMensaje(true,"Error ", errores[x]);
                                     break;
                          }
                       }
                    });
     });

     if ($('form[id="f_simulacros"]')[0]!=undefined && $('form[id="f_simulacros"]')[0].id=='f_simulacros') {
        var formsi = $('form[id="f_simulacros"]')[0];
        $("#guardarsimulacro").click(function(e){
                  e.preventDefault();
                  if (formsi.checkValidity() === false) {
                    formsi.classList.add('was-validated');
                    return;
                  }
                  var fd = new FormData();
                  //fd.append(this.id,this.files[0]);
                  fd.append('rfc',$('#rfc')[0].value);
                  fd.append('pantalla',this.closest('form').id);
                  fd.append('fecha',$('#si_fecha')[0].value);
                  fd.append('id_tipodesimulacro',$('#id_tipodesimulacro')[0].value);
                  fd.append('hipotesis',$('#hipotesis')[0].value);
                  if ($('#s_id_file_0040')[0].files[0]!=undefined) {
                     fd.append('id_file_0040',$('#s_id_file_0040')[0].files[0]);
                  }
                  fd.append('email_acreditado',$('#nombre-usuario').data('email'));


                    $.ajax({
                       type: 'post',
                       url: mipath()+'api/inmuebles/'+formd.dataset.id+'?simulacros',
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       contentType: false,
                       processData: false,
                       cache:       false,
                       data : fd,
                       success: function(data){
                             if (formd.dataset.id=='' && data.id!='') {
                                 formd.dataset.id=data.id;
                             }
                             armagridhorizontal($('form[id="f_simulacros"]')[0],jsonf,data[0]);
                             crearMensaje(false,"Atención", ' Se agregó un simulacro');
                             $('#l_s_id_file_0040')[0].innerHTML='Selecciona un archivo PDF';
                             validasimulacros();
                             formsi.reset();
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                                     crearMensaje(true,"Error: ", errores[x]);
                                     break;
                          }
                       }
                    });
        });
     }

     if ($('form[id="f_comitei"]')[0]!=undefined && $('form[id="f_comitei"]')[0].id=='f_comitei') {
        var formco = $('form[id="f_comitei"]')[0];
        $("#ci_curp").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#guardarpuesto").click(function(e){
                  e.preventDefault();
                  if (formco.checkValidity() === false) {
                    formco.classList.add('was-validated');
                    return;
                  }
                  if ($('#s_id_file_0041')[0].files.length==0) {
                     crearMensaje(false,"Atención", ' Falta anexar el documento que avala la constancia de capacitación');
                     $('#s_id_file_0041')[0].focus();
                  }
                  var fd = new FormData();
                  //fd.append(this.id,this.files[0]);
                  fd.append('rfc',$('#rfc')[0].value);
                  fd.append('pantalla',this.closest('form').id);
                  fd.append('nombres',$('#ci_nombres')[0].value);
                  fd.append('id_figuras',$('#id_figuras')[0].value);
                  fd.append('ape_pat',$('#ci_ape_pat')[0].value);
                  fd.append('ape_mat',$('#ci_ape_mat')[0].value);
                  fd.append('cargo',$('#ci_cargo')[0].value);
                  fd.append('curp',$('#ci_curp')[0].value);
                  fd.append('id_file_0041',$('#s_id_file_0041')[0].files[0]);
                  fd.append('email_acreditado',$('#nombre-usuario').data('email'));


                    $.ajax({
                       type: 'post',
                       url: mipath()+'api/inmuebles/'+formd.dataset.id+'?comites',
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       contentType: false,
                       processData: false,
                       cache:       false,
                       data : fd,
                       success: function(data){
                             if (formd.dataset.id=='' && data.id!='') {
                                 formd.dataset.id=data.id;
                             }
                             armagridhorizontal($('form[id="f_comitei"]')[0],jsonp,data[0]);
                             crearMensaje(false,"Atención", ' Se agregó un puesto en el comite interno');
                             valor=$('#id_figuras')[0].value;
                             marcapuesto(valor);
                             if ($("#id_figuras option[value='"+valor+"']")[0].dataset.unapersona==1) {
                                $("#id_figuras option[value='"+valor+"']").remove();
                             }
                             $('#l_s_id_file_0041')[0].innerHTML='Selecciona un archivo PDF';
                             formco.reset();
                            
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                                     crearMensaje(true,"Error ", errores[x]);
                                     break;
                          }
                       }
                    });
        });
     }


     if ($('form[id="f_punto"]')[0]!=undefined && $('form[id="f_punto"]')[0].id=='f_punto') {
        var formpr = $('form[id="f_punto"]')[0];
        $('form[id="f_punto"] :input').on('change', function(e) {
             cambia_dato(e);
        });

        $("#guardarpunto").click(function(e){
                  e.preventDefault();
                  if (formpr.checkValidity() === false) {
                    formpr.classList.add('was-validated');
                    return;
                  }
                  var Data1 = {
                        pr_ubicacion : $('#wl_pr_ubicacion')[0].value,
                        pr_tipo : $("input[name='wl_pr_tipo']:checked").val(),
                        pr_otro : $('#wl_pr_otro')[0].value,
                        pr_m2_superficie : $('#wl_pr_m2_superficie')[0].value,
                        pr_capacidad : $('#wl_pr_capacidad')[0].value,
                        lat_pr : $('#lat_pr')[0].value,
                        long_pr : $('#long_pr')[0].value,
                        rfc : $('#rfc')[0].value,
                        pantalla : formpr.id,
                        email_acreditado : $('#nombre-usuario').data('email')
                    };


                    $.ajax({
                       type: 'put',
                       url: mipath()+'api/inmuebles/'+formd.dataset.id+'?puntosdereunion',
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       data: Data1,
                       success: function(data){
                             if (formd.dataset.id=='' && data.id!='') {
                                 formd.dataset.id=data.id;
                             }
                             armagridhorizontal($('form[id="f_punto"]')[0],jsonpunto,data[0]);
                             crearMensaje(false,"Atención", ' Se agregó un punto de reunión');
                             validapuntos();
                             formpr.reset();
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                                     crearMensaje(true,"Error ", errores[x]);
                                     break;
                          }
                       }
                    });
        });
     }

     if ($('form[id="f_construccion"]')[0]!=undefined && $('form[id="f_construccion"]')[0].id=='f_construccion') {
        var formc = $('form[id="f_construccion"]')[0];
        $('form[id="f_construccion"] :input').on('blur', function(e) {
             cambia_dato(e);
        });

        $("#guardarconstruccion").click(function(e){
                  e.preventDefault();
                  if (formc.checkValidity() === false) {
                    formc.classList.add('was-validated');
                    return;
                  }
                  var Data1 = {
                        id_zonageotecnica : $('#wl_id_zonageotecnica')[0].value,
                        id_tipodeconstruccion : $('#wl_id_tipodeconstruccion')[0].value,
                        id_tipodecimentacion : $('#wl_id_tipodecimentacion')[0].value,
                        id_tipodeestructura : $('#wl_id_tipodeestructura')[0].value,
                        /* id_tipodeloza : $('#wl_id_tipodeloza')[0].value, */
                        cambioestructura : $("input[name='wl_cambioestructura']:checked").val(),
                        fechadelcambio : $('#wl_fechadelcambio')[0].value,
                        rfc : $('#rfc')[0].value,
                        pantalla : formc.id,
                        email_acreditado : $('#nombre-usuario').data('email'),
                        ce_maco : $('#ce_maco')[0].value,
                        ce_anocons : $('#ce_anocons')[0].value,
                        ce_niveles_totales : $('#ce_niveles_totales')[0].value,
                        ce_in_hidrosanitarias : $('#ce_in_hidrosanitarias')[0].value,
                        ce_in_electricas : $('#ce_in_electricas')[0].value,
                        ce_in_especiales : $('#ce_in_especiales')[0].value,
                        ce_elevadores : $('#ce_elevadores')[0].value,
                        ce_crsp : $("input[name='ce_crsp']:checked").val(),
                        ce_matt : $("input[name='ce_matt']:checked").val()
                    };

                    $.ajax({
                       type: 'put',
                       url: mipath()+'api/inmuebles/'+formd.dataset.id,
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       data: Data1,
                       success: function(data){
                             $('#v-pills-construccion')[0].classList.remove('active');
                             $('#v-pills-construccion')[0].classList.remove('show')
                             $('#v-pills-construccion-tab')[0].classList.remove('active');
                             $('#v-pills-construccion-tab').children()[0].classList.remove('d-none'); 
                             $('#v-pills-punto')[0].classList.add('active');
                             $('#v-pills-punto')[0].classList.add('show')
                             $('#v-pills-punto-tab')[0].classList.add('active')
                             if (formd.dataset.id=='' && data.id!='') {
                                 formd.dataset.id=data.id;
                             }
                             crearMensaje(false,"Atención", ' Se actualizó información de construcción y estructura');
                             $("#f_punto :input:not([readonly='readonly']):not([disabled='disabled'])").first().focus()
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                                     crearMensaje(true,"Error ", errores[x]);
                                     break;
                          }
                       }
                    });
        });
     }

     if ($('form[id="f_poblacion"]')[0]!=undefined && $('form[id="f_poblacion"]')[0].id=='f_poblacion') {
        var formp = $('form[id="f_poblacion"]')[0];
        $('form[id="f_poblacion"] :input').on('change', function(e) {
             cambia_dato(e);
        });

        $("#guardarpoblacion").click(function(e){
                  e.preventDefault();
                  if (formp.checkValidity() === false) {
                    formp.classList.add('was-validated');
                    return;
                  }
                  var Data1 = {
                         po_fija_esta : $('#wl_po_fija_esta')[0].value,
                        //po_fija_inmue : $('#wl_po_fija_inmue')[0].value,
                        po_flotante : $('#wl_po_flotante')[0].value,
                        po_disca_fisica : $('#wl_po_disca_fisica')[0].value,
                        po_disca_visual : $('#wl_po_disca_visual')[0].value,
                        po_disca_audi : $('#wl_po_disca_audi')[0].value,
                        po_disca_intele : $('#wl_po_disca_intele')[0].value,
                        po_disca_mental : $('#wl_po_disca_mental')[0].value,
                        po_lactantes : $('#wl_po_lactantes')[0].value,
                        rfc : $('#rfc')[0].value,
                        pantalla : formp.id,
                        email_acreditado : $('#nombre-usuario').data('email')
                    };

                    $.ajax({
                       type: 'put',
                       url: mipath()+'api/inmuebles/'+formd.dataset.id,
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       data: Data1,
                       success: function(data){
                             $('#v-pills-poblacion')[0].classList.remove('active');
                             $('#v-pills-poblacion')[0].classList.remove('show')
                             $('#v-pills-poblacion-tab')[0].classList.remove('active');
                             $('#v-pills-poblacion-tab').children()[0].classList.remove('d-none'); 
                             $('#v-pills-construccion')[0].classList.add('active');
                             $('#v-pills-construccion')[0].classList.add('show')
                             $('#v-pills-construccion-tab')[0].classList.add('active')
                             if (formd.dataset.id=='' && data.id!='') {
                                 formd.dataset.id=data.id;
                             }
                             crearMensaje(false,"Atención", ' Se actualizó información de población');
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                                     crearMensaje(true,"Error ", errores[x]);
                                     break;
                          }
                       }
                    });
        });
     }

     if ($('form[id="f_boleta"]')[0]!=undefined && $('form[id="f_boleta"]')[0].id=='f_boleta') {
        var formi = $('form[id="f_boleta"]')[0];
        $('form[id="f_boleta"] :input').on('change', function(e) {
             cambia_dato(e);
        });

        $("#nombre_1").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#primer_apellido_1").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#segundo_apellido_1").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })

        $("#nombre_2").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#primer_apellido_2").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#segundo_apellido_2").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })

        $("#guardarexpediente").click(function(e){
                  e.preventDefault();
                  if (formi.checkValidity() === false) {
                    formi.classList.add('was-validated');
                    return;
                  }
                  var Data1 = {
                        m2_terreno : $('#wl_m2_terreno')[0].value,
                        m2_construidos : $('#wl_m2_construidos')[0].value,
                        niveles_ocupados : $('#wl_niveles_ocupados')[0].value,
                        niveles_inmueble : $('#wl_niveles_inmueble')[0].value,
                        lat : $('#wl_lat')[0].value,
                        long : $('#wl_long')[0].value,
                        rfc : $('#rfc')[0].value,
                        pantalla : formi.id,
                        email_acreditado : $('#nombre-usuario').data('email')
                    };

                    $.ajax({
                       type: 'put',
                       url: mipath()+'api/inmuebles/'+formd.dataset.id,
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       data: Data1,
                       success: function(data){
                             $('#v-pills-informacion-inmueble')[0].classList.remove('active');
                             $('#v-pills-informacion-inmueble')[0].classList.remove('show')
                             $('#v-pills-informacion-inmueble-tab')[0].classList.remove('active');
                             $('#v-pills-informacion-inmueble-tab').children()[0].classList.remove('d-none'); 
                             $('#v-pills-poblacion')[0].classList.add('active');
                             $('#v-pills-poblacion')[0].classList.add('show')
                             $('#v-pills-poblacion-tab')[0].classList.add('active')
                             if (formd.dataset.id=='' && data.id!='') {
                                 formd.dataset.id=data.id;
                             }
                             crearMensaje(false,"Atención:", ' Se actualizó información del inmueble');
                             $("#f_poblacion :input:not([readonly='readonly']):not([disabled='disabled'])").first().focus();
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                                     crearMensaje(true,"Error: ", errores[x]);
                                     break;
                          }
                       }
                    });
        });
     }

     if ($('form[id="f_domicilio"]')[0]!=undefined && $('form[id="f_domicilio"]')[0].id=='f_domicilio') {
        $("#wl_alias").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        var formd = $('form[id="f_domicilio"]')[0];

        $("#wl_alias").keyup(function(){
              $("#des_inmueble").text('-'+this.value);
        });
        $('form[id="f_domicilio"] :input').on('change', function(e) {
             cambia_dato(e);
        });

        $("#grabainmueble").click(function(e){
                  e.preventDefault();
                  if (formd.checkValidity() === false) {
                    formd.classList.add('was-validated');
                    return;
                  } 
                             $('#v-pills-domicilio')[0].classList.remove('active');
                             $('#v-pills-domicilio')[0].classList.remove('show')
                             $('#v-pills-domicilio-tab')[0].classList.remove('active');
                             $('#v-pills-domicilio-tab').children()[0].classList.remove('d-none');
                             $('#v-pills-informacion-inmueble')[0].classList.add('active');
                             $('#v-pills-informacion-inmueble')[0].classList.add('show')
                             $('#v-pills-informacion-inmueble-tab')[0].classList.add('active')

        });
     }

     if ($('form[id="f_informacion"]')[0]!=undefined && $('form[id="f_informacion"]')[0].id=='f_informacion') {
        var form = $('form[id="f_informacion"]')[0];
        var inputs = form.getElementsByTagName('input');
        console.log('detecto establecimiento');


        $('#rfc').on('change', function(e) {
                    console.log('entro a buscar por rfc');
                    elemp=window.location.href.split('/').length;
                    $.ajax({
                       type: 'get',
                       url: mipath()+'api/establecimientos/'+$('#rfc')[0].value+(elemp==8 ? '/'+window.location.href.split('/')[7] : ''),
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       success: function(data){
                             if (('data' in data) && data.data.indexOf('no existe')>=0) {
                               var rfc=$('#rfc')[0].value;
                               $('form[id="f_informacion"]')[0].reset();
                               $('#rfc')[0].value=rfc;
                               $('#nombres')[0].focus();
                             } else {
                                $('#des_establecimiento').text(data.nombres+' ');
                                if (data.alias!=undefined) {
                                   $('#des_inmueble').text(data.alias+' ');
                                } else {  $('#des_inmueble').text(''); }
                                muestradatos($('form[id="f_informacion"]')[0],data);
                                cambiapersona($("input[name='tipopersona']:checked").val());
                                cambiapersona_l($("input[name='tipopersona_']:checked").val());
                                //console.log('paso pago change 2');
                                if (!$('#rfc').prop('readonly')) {
                                   crearMensaje(false,"Atención", ' El RFC ya existe y se muestra los datos del establecimiento');
                                }
                                if ('rinmu' in data) {
                                   if (formd.dataset.id=='' && data.rinmu[0].id!='') {
                                       formd.dataset.id=data.rinmu[0].id;
                                   }
                                   if (data.rinmu[0].alias!=undefined) {
                                       $('#des_inmueble').text(data.rinmu[0].alias+' ');
                                   } else {  $('#des_inmueble').text(''); }
                                   muestradatos($('form[id="f_domicilio"]')[0],data.rinmu[0]);
                                   muestradatos($('form[id="f_informacion-inmueble"]')[0],data.rinmu[0]);
                                   muestradatos($('form[id="f_poblacion"]')[0],data.rinmu[0]);
                                   muestradatos($('form[id="f_construccion"]')[0],data.rinmu[0]);
                                   //muestradatos($('form[id="f_punto"]')[0],data.rinmu[0]);
                                   muestradatos($('form[id="f_analisis"]')[0],data.rinmu[0],1);
                                   muestradatos($('form[id="f_reduccion"]')[0],data.rinmu[0],1);
                                   muestradatos($('form[id="f_contingencias"]')[0],data.rinmu[0],3);
                                   muestradatos($('form[id="f_continuidad"]')[0],data.rinmu[0],1);
                                   muestradatos($('form[id="f_documentos"]')[0],data.rinmu[0],1);
                                }
                                if ('simu' in data) {
                                   for (si in data.simu) {
                                           armagridhorizontal($('form[id="f_simulacros"]')[0],jsonf,data.simu[si])
                                   }
                                   validasimulacros();
                                }
                                if ('comi' in data) {
                                   for (si in data.comi) {
                                           armagridhorizontal($('form[id="f_comitei"]')[0],jsonp,data.comi[si])
                                           marcapuestoxdes(data.comi[si].descomites.split("-")[0]);
                                   }
                                }
                                if ('punt' in data) {
                                   for (si in data.punt) {
                                           armagridhorizontal($('form[id="f_punto"]')[0],jsonpunto,data.punt[si])
                                   }
                                   validapuntos();
                                }

                             }
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                                     crearMensaje(true,"Error ", errores[x]);
                                     break;
                          }
                       }
                    });
        });

        if (window.location.href.split('/').length==7) {    /*  viene del grid */
                $('#rfc')[0].value=window.location.href.split('/')[6];
                $('#rfc').attr('readonly', true);;
                $('#rfc').trigger("change");
        }

        if (window.location.href.split('/').length==8) {    /*  viene del grid */
                $('#rfc')[0].value=window.location.href.split('/')[6];
                $('#rfc').attr('readonly', true);;
                $('#rfc').trigger("change");
        }


        $('input[type="radio"][name="tipopersona"]').on('change', function(e) {
             cambiapersona(e.target.value);
        });

        $('input[type="radio"][name="tipopersona_"]').on('change', function(e) {
             console.log('entro a cambiar la persona='+e.target.value);
             cambiapersona_l(e.target.value);
        });
        //$('input[type="radio"][name="tipopersona"]').trigger( "change" );
        //$('input[type="radio"][name="tipopersona_"]').trigger( "change" );

        $("#creaestablecimiento").click(function(e){
                  e.preventDefault();
                  if (form.checkValidity() === false) {
                    form.classList.add('was-validated');
                    return;
                  }

                 var checked = $('input[type="radio"][name="sector"]:checked').length;
                 if(!checked) {
                      crearMensaje(true,"Error ", "Al menos debe seleccionar un sector");
                      $("#sector_publico").focus();
                      return false;
                 }

                 var checked = $('input[type="radio"][name="inmueblees"]:checked').length;
                 if(!checked) {
                      crearMensaje(true,"Error ", "Debe seleccionar el 'Inmueble es'");
                      $("#unico").focus();
                      return false;
                 }

                 var inputs = form.getElementsByTagName('input');
                  var Data1 = {
                        tipopersona :  $("input[name='tipopersona']:checked").val(),
                        nombres: $('#nombres')[0].value,
                        ape_pat: $('#ape_pat')[0].value,
                        ape_mat: $('#ape_mat')[0].value,
                        rfc: $('#rfc')[0].value,
                        folioacta: $('#folioacta')[0].value,
                        numeroescritura: $('#numeroescritura')[0].value,
                        numeronotario: $('#numeronotario')[0].value,
                        id_giro: $('#id_giro')[0].value,
                        tipopersona_ :  $("input[name='tipopersona_']:checked").val(),
                        nombres_rl: $('#nombres_rl')[0].value,
                        razon_social_rl: $('#razon_social_rl')[0].value,
                        ape_pat_rl: $('#ape_pat_rl')[0].value,
                        ape_mat_rl: $('#ape_mat_rl')[0].value,
                        email_rl: $('#email_rl')[0].value,
                        folioacta_rl: $('#folioacta_rl')[0].value,
                        fechadeotorgamiento : $('#fechadeotorgamiento')[0].value,
                        nombreexpide : $('#nombreexpide')[0].value,
                        numeronotario_el : $('#numeronotario_el')[0].value,
                        id_entidad : $('#id_entidad')[0].value,
                        nombres_re : $('#nombres_re')[0].value,
                        ape_pat_re : $('#ape_pat_re')[0].value,
                        ape_mat_re : $('#ape_mat_re')[0].value,
                        email_re : $('#email_re')[0].value,
                        sector : $("input[name='sector']:checked").val(),
                        inmueblees : $("input[name='inmueblees']:checked").val(),
                        cartac_vigencia : $('#cartac_vigencia')[0].value,
                        id_identificacion : $('#id_identificacion')[0].value,
                        folioIdentificacion : $('#folioIdentificacion')[0].value,
                        id_nacionalidad : $('#id_nacionalidad')[0].value,
                        email_acreditado : form.dataset.emailacreditado,
                        id_tipoestablecimiento : $('#id_tipoestablecimiento')[0].value,
                    };

                    $.ajax({
                       type: 'post',
                       url: mipath()+'api/establecimientos',
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       data: Data1,
                       success: function(data){
                             formd.dataset.id='';   // Limpia el id del establecimiento
                             $('#des_establecimiento').text(Data1.nombres);
                             //$('#des_inmueble').text("favor de registrar primero el domicilio completo del inmueble");
                             $('#des_inmueble').text("");

                             $('#menu-informacion')[0].classList.add('collapsed')
                             $('#menu-informacion')[0].classList.remove('active')
                             $('#v-pills-informacion')[0].classList.remove('active');
                             $('#v-pills-informacion')[0].classList.remove('show');
                             $('#v-pills-informacion-tab')[0].classList.remove('active');

                             $('#menu-inmueble')[0].classList.remove('collapsed')
                             $('#menu-inmueble')[0].classList.add('active')
                             $('#c_inmueble')[0].classList.add('show');  /* colapsse */
                             $('#v-pills-domicilio')[0].classList.add('active');
                             $('#v-pills-domicilio')[0].classList.add('show')
                             $('#v-pills-domicilio-tab')[0].classList.add('active')
                             crearMensaje(false,"Atención ",data.msg);
                             //location.href = "#v-pills-domicilio";
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                                     crearMensaje(true,"Error ", errores[x]);
                                     break;
                          }
                       }
                    });
        });



     }

     //Editar perfil
     if ($('main')[0].id=='editarperfil') {
        $("#guardarcambios").click(function(e){
                  e.preventDefault();
                  var forms = document.getElementsByClassName('needs-validation');
                  if (forms[0].checkValidity() === false) {
                    forms[0].classList.add('was-validated');
                    return;
                  }
                 var checked = $("input[type=checkbox]:checked").length;

                 if(!checked && $('#queperfil')[0].innerText=='Tercero Acreditado') {
                      crearMensaje(true,"Error ", "Al menos debe seleccionar una actividad registrada");
                      $("#cb").focus();
                      return false;
                 }

                  if ($('#queperfil')[0].innerText=='Tercero Acreditado') {
                  var Data1 = {
                        nombres: $('#nombres')[0].value,
                        ape_pat: $('#ape_pat')[0].value,
                        ape_mat: $('#ape_mat')[0].value,
                        rfc: $('#rfc')[0].value,
                        sgirpc: $('#sgirpc')[0].value,
                        id_nivel: $('#id_nivel')[0].value,
                        vigencia: $('#vigencia')[0].value,
                        stps: $('#stps')[0].value,
                        calle: $('#calle')[0].value,
                        exterior: $('#exterior')[0].value,
                        interior: $('#interior')[0].value,
                        colonia: $('#colonia')[0].value,
                        id_alcaldia: $('#id_alcaldia')[0].value,
                        cp: $('#cp')[0].value,
                        num_telefono: $('#num_telefono')[0].value,
                        tipopersona :  $("input[name='tipo_persona']:checked").val(),
                        cb : ($('#cb')[0].checked ? 1 : 0),
                        epmr : ($('#epmr')[0].checked ? 1 : 0),
                        erv : ($('#erv')[0].checked ? 1 : 0),
                        rpar : ($('#rpar')[0].checked ? 1 : 0)
                        }
                    } else {
                  var Data1 = {
                        nombres: $('#nombres')[0].value,
                        ape_pat: $('#ape_pat')[0].value,
                        ape_mat: $('#ape_mat')[0].value
                        }
                    }

                    $.ajax({
                      type: 'put',
                      url: mipath()+'api/users/'+$('#editarperfil')[0].dataset.id,
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       data: Data1,
                       success: function(data){
                             location.href = base_url+"/informacion-actualizada";
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                                     crearMensaje(true,"Error ", errores[x]);
                                     break;
                          }
                       }
                    });
        });

        $('input[type="radio"]').on('change', function(e) {
             if (e.target.value=="M") {
                 $('#lnombres').text("Razon social*");
                 $('#nombres').attr("placeholder","Escribe la razón social");
                 $('#apa').hide();
                 $('#nom').attr("class","col-lg-12 mb-3");
                 $('#ama').hide();
                 $('#ape_pat').attr("required",false);
             }
             if (e.target.value=="F") {
                 $('#lnombres').text("Nombres(s)*");
                 $('#nombres').attr("placeholder","Escribe tu(s) nombre(s)");
                 $('#apa').show();
                 $('#nom').attr("class","col-lg-4");
                 $('#ama').show();
                 $('#ape_pat').attr("required",true);
             }

        });

     }

     if ($('main')[0].id=='notienecuenta') {
        $("#nombres").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#ape_pat").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#ape_mat").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#creacuenta").click(function(e){
//                console.log('Va a crear cuenta');
                  e.preventDefault();
                  var forms = document.getElementsByClassName('needs-validation');
                  if (forms[0].checkValidity() === false) {
                    forms[0].classList.add('was-validated');
                    return;
                  }
                 var checked = $("input[type=checkbox]:checked").length;

                 if(!checked) {
                      crearMensaje(true,"Error ", "Al menos debe seleccionar una actividad registrada");
                      $("#cb").focus();
                      return false;
                 }


                  var Data1 = {
                        nombres: $('#nombres')[0].value,
                        email: $('#email')[0].value,
                        ape_pat: $('#ape_pat')[0].value,
                        ape_mat: $('#ape_mat')[0].value,
                        rfc: $('#rfc')[0].value,
                        sgirpc: $('#sgirpc')[0].value,
                        id_nivel: $('#id_nivel')[0].value,
                        vigencia: $('#vigencia')[0].value,
                        stps: $('#stps')[0].value,
                        calle: $('#calle')[0].value,
                        exterior: $('#exterior')[0].value,
                        interior: $('#interior')[0].value,
                        colonia: $('#colonia')[0].value,
                        id_alcaldia: $('#id_alcaldia')[0].value,
                        cp: $('#cp')[0].value,
                        num_telefono: $('#num_telefono')[0].value,
                        tipopersona :  $("input[name='tipo_persona']:checked").val(),
                        password :  $('#password')[0].value,
                        password_confirmation :  $('#password_confirma')[0].value,
                        cb : ($('#cb')[0].checked ? 1 : 0),
                        epmr : ($('#epmr')[0].checked ? 1 : 0),
                        erv : ($('#erv')[0].checked ? 1 : 0),
                        rpar : ($('#rpar')[0].checked ? 1 : 0)
                    };

                    $.ajax({
                       type: 'post',
                       url: mipath()+'api/register?tercero',
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       data: Data1,
                       success: function(data){
                             location.href = base_url+"/registro-exitoso";
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                                     crearMensaje(true,"Error ", errores[x]);
                                     break;
                          }
                       }
                    });
        });

        $('input[type="radio"]').on('change', function(e) {
             if (e.target.value=="M") {
                 $('#lnombres').text("Razón social*");
                 $('#nombres').attr("placeholder","Escribe la razón social");
                 $('#apa').hide();
                 $('#nom').attr("class","col-lg-12 mb-3");
                 $('#ama').hide();
                 $('#ape_pat').attr("required",false);
             }
             if (e.target.value=="F") {
                 $('#lnombres').text("Nombres(s)*");
                 $('#nombres').attr("placeholder","Escribe tu(s) nombre(s)");
                 $('#apa').show();
                 $('#nom').attr("class","col-lg-4");
                 $('#ama').show();
                 $('#ape_pat').attr("required",true);
             }

        });

     }



     if ($('main')[0].id=='restaura') {
        $("#btn_restaura").click(function(e){
             e.preventDefault();
             if ($('#password')[0].value=='') {
                crearMensaje(true,"Atención", ' Debe teclear su nueva contraseña');
                return;
             }
             if ($('#password_confirmation')[0].value=='') {
                crearMensaje(true,"Atención", ' Debe teclear la confirmación de su nueva contraseña');
                return;
             }
             if ($('#password')[0].value!=$('#password_confirmation')[0].value) {
                crearMensaje(true,"Atención", ' No coinciden las contraseñas');
                return;
             }

             console.log('Entró en olvido contraseña');
             var Data1 = {
                     cambiocontra: window.location.pathname.substr(window.location.pathname.indexOf('restaura')+9),
                     password: $('#password')[0].value,
                     password_confirmation: $('#password_confirmation')[0].value,
                     //api_token: document.head.querySelector('meta[name="api_token"]').content

             };
                  var uri = location.href.substr(0,(location.href.indexOf('public')+7))+'api/restacontra';
                  $.ajax({
                      type: 'post',
                      url: uri,
                      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                      data: Data1,
                      success: function(data){
                                    crearMensaje(false,"Atención", ' Se cambió su contraseña');
                                    location.href = base_url+"/cambio-contra";
                                    return;
                                },
                      error: function( jqXhr, textStatus, errorThrown ){
                             if (typeof(jqXhr.responseJSON)=='object') {
                               	var errores=jqXhr.responseJSON.errors;
                                for (var x in errores) {
                                    crearMensaje(true,"Error ", errores[x]);
                                    break;
                                }
                             } else {
                               crearMensaje(true,"Error ", jqXhr.responseJSON);
                             }
                      }
                 });
        });
     }

     if ($('main')[0].id=='ingreso') {
        $("#login").click(function(e){
        e.preventDefault();
        var forms = document.getElementsByClassName('needs-validation');
        if (forms[0].checkValidity() === false) {
          forms[0].classList.add('was-validated');
          return;
        }

             var Data1 = {
                  email: $('#email')[0].value,
                  password :  $('#password')[0].value,
                 };
                  $.ajax({
                      type: 'post',
                    url: mipath()+'api/login',
                      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                      data: Data1,
                      success: function(data){
                                if (data.data.activo!=1) {
                                    crearMensaje(true,"Atención", ' El usuario aún no está autorizado para utilizar el aplicativo');
                                    return;
                                }
                                for (var x in data) {
                                     console.log('que tiene='+data[x]);
                                     if (x=='menus') {
                                         var eleme= data[x].find(function (element) { return element.mdefault==1} ) ;
                                         if (eleme==undefined) {
                                                crearMensaje(true,"Error ", "No hay menu por default para el usuario");
                                                return;
                                         } else {
                                                location.href = base_url+"/" + eleme.componente + "?_token="+$('meta[name="csrf-token"]').attr('content');
                                                return;
                                         }
                                     }
                                }
                                crearMensaje(true,"Error ", "El usuario no tiene un perfil asignado");
                      },
                      error: function( jqXhr, textStatus, errorThrown ){
                             var errores=jqXhr.responseJSON.errors;
                             for (var x in errores) {
                               crearMensaje(true,"Error ", errores[x]);
                               break;
                             }
                      }
                  });
             });

        $("#olvidocontra").click(function(e){
             e.preventDefault();
             if ($('#email')[0].value=='') {
                crearMensaje(false,"Atención", ' El email es obligatorio para que recupere la contraseña');
                return;
             }
             console.log('Entró en olvido contraseña');
             var Data1 = {
                  email: $('#email')[0].value,
             };
                  $.ajax({
                      type: 'put',
                      url: mipath()+'api/userso/'+$('#email')[0].value,
                      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                      data: Data1,
                      success: function(data){
                                    crearMensaje(false,"Cambio de contraseña", ' Se envió un email a su bandeja para poder cambiar su contraseña');
                                    return;
                                },
                      error: function( jqXhr, textStatus, errorThrown ){
                             //var errores=jqXhr.responseJSON.errors;
                             //for (var x in errores) {
                               crearMensaje(true,"Error ", jqXhr.responseJSON);
                               //break;
                             //}
                      }
                 });
        });

     }

     if ($('main')[0].id=='3acreditado') {
        $("#nombres").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#buscar").click(function(e){
             e.preventDefault();
             if ($('#nombres')[0].value=="" && $('#email')[0].value=="" && $('#perfiles')[0].value==""
                               && $('#estatus')[0].value=="") {
                crearMensaje(true,"Atención", ' Al menos debe introducir un dato en la búsqueda');
                return;
             }
             var Data1 = {
                  nombres: $('#nombres')[0].value,
                  email :  $('#email')[0].value,
                  idperfil :  $('#perfiles')[0].value,
                  activo :  $('#estatus')[0].value,
                 };
                  $.ajax({
                            type: 'get',
                            url: mipath()+'api/users',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: Data1,
                            success: function(data){
                            if (data.length>0) {
                                    var dis = { id : { header : 'id', 'class' : 'font-weight-bold' }
                                               , nombrecompleto : { header : 'Nombres', 'class' : 'font-weight-bold' }
                                               , desperfil : { header : 'Perfil', 'class' : 'font-weight-bold' }
                                               , email :  { header : 'email', 'class' : 'font-weight-bold' }
                                               //, rfc : { header : 'rfc','class' : 'font-weight-bold' }
                                               , desactivo : { header : 'Estatus','class' : 'font-weight-bold' }
                                               , ver : { header : 'Ver', 'boton' : true ,'classb' : 'btn-ver', 'funcion' : 'ver3' }
                                             }
                                  armadatagrid(data,dis);
                            } else {
                                  crearMensaje(true,"Atención", ' No se encontraron registros');
                                  return;
                            }
                         },
                            error: function( jqXhr, textStatus, errorThrown ){
                                  var errores=jqXhr.responseJSON.errors;
                                  for (var x in errores) {
                                        crearMensaje(true,"Error", errores[x]);
                                        break;
                                 }
                       }
                  });
             });
        $("#buscar").trigger("click");
     }

     if ($('main')[0].id=='expedientes-registrados') {
        //$("#rfc").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#nombres").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#buscar").click(function(e){
             e.preventDefault();
             var Data1 = {
                  nombres: $('#nombres')[0].value,
                  //rfc :  $('#rfc')[0].value,
                  //email_acreditado : $('#nombre-usuario').data('email')
                 };
                  $.ajax({
                            type: 'get',
                            url: mipath()+'api/boletas',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: Data1,
                            success: function(data){
                            if (data.length>0) {
                                   var dis = { numinmuebles : { header : 'numinmuebles', 'class' : 'font-weight-bold', 'funcion' : 'inmuebles_e', 'boton' : true , 'classb' : 'btn-mostrar','funcion' : 'ver_i'}
                                               , nombres : { header : 'Solicitante', 'class' : 'font-weight-bold' }
                                               , rfc :  { header : 'rfc', 'class' : 'font-weight-bold' }
                                               , ver : { header : 'Ver perfil', 'boton' : true ,'classb' : 'btn-ver', 'funcion' : 'ver_e' }
                                               , editar : { header : 'Editar', 'boton' : true ,'classb' : 'btn-editar', 'funcion' : 'ver_e' }
                                               , eliminar : { header : 'Eliminar', 'boton' : true ,'classb' : 'btn-eliminar', 'funcion' : 'eliminar_e' }
                                             }
                                  armadatagrid(data,dis);
                            } else {
                                  crearMensaje(true,"Atención", ' No se encontraron registros');
                                  return;
                            }
                         },
                            error: function( jqXhr, textStatus, errorThrown ){
                                  var errores=jqXhr.responseJSON.errors;
                                  for (var x in errores) {
                                        crearMensaje(true,"Error ", errores[x]);
                                        break;
                                 }
                       }
                  });
             });
        $("#buscar").trigger("click");
        $('#crearexpediente').on('click', function() {
             //var id = $(this).data('id');
             window.location = mipath() + 'crearexpediente/';
        });

     }

     if ($('main')[0].id=='establecimientos-registrados-todos') {
        $("#rfc").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#nombres").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#buscart").click(function(e){
             e.preventDefault();
             var Data1 = {
                  nombres: $('#nombres')[0].value,
                  rfc :  $('#rfc')[0].value,
                  //email_acreditado : $('#nombre-usuario').data('email')
                 };
                  $.ajax({
                            type: 'get',
                            url: mipath()+'api/establecimientos',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: Data1,
                            success: function(data){
                            if (data.length>0) {
                                   var dis = { 
                                                 terceroacreditado : { header : 'Tercero Acreditado', 'class' : 'font-weight-bold' }
                                               , nombres : { header : 'Solicitante', 'class' : 'font-weight-bold' }
                                               , rfc :  { header : 'rfc', 'class' : 'font-weight-bold' }
                                               //, ver : { header : 'Ver perfil', 'boton' : true ,'classb' : 'btn-ver', 'funcion' : 'ver_e' }
                                               , numinmuebles : { header : 'numinmuebles', 'class' : 'font-weight-bold', 'funcion' : 'inmuebles_e', 'boton' : true , 'classb' : 'btn-mostrar','funcion' : 'ver_it'}
                                               ,email_acreditado : { header : 'Email Acreditado', 'class' : 'font-weight-bold d-none' }
                                             }
                                  armadatagrid(data,dis);
                            } else {
                                  crearMensaje(true,"Atención", ' No se encontraron registros');
                                  return;
                            }
                         },
                            error: function( jqXhr, textStatus, errorThrown ){
                                  var errores=jqXhr.responseJSON.errors;
                                  for (var x in errores) {
                                        crearMensaje(true,"Error ", errores[x]);
                                        break;
                                 }
                       }
                  });
             });
        $("#buscart").trigger("click");
     }

     if ($('main')[0].id=='inmuebles-registrados-todos') {
        $("#rfc").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#alias").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#buscart").click(function(e){
             e.preventDefault();
             var Data1 = {
                  alias: $('#alias')[0].value,
                  rfc :  $('#rfc')[0].value,
                  calle :  $('#calle')[0].value,
                  id_alcaldia :  $('#id_alcaldia')[0].value,
                 };
                  $.ajax({
                            type: 'get',
                            url: mipath()+'api/inmuebles',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: Data1,
                            success: function(data){
                            if (data.length>0) {
                                   var dis = {
                                                 idesta    : { header    : 'ID', 'class' : 'd-none' }
                                               , alias : { header : 'Alias', 'class' : 'font-weight-bold' }
                                               , rfc :  { header : 'rfc', 'class' : 'font-weight-bold' }
                                               , desalcaldia : { header : 'Alcaldia', 'class' : 'font-weight-bold' }
                                               , calle_completa : { header : 'Calle', 'class' : 'font-weight-bold' }
                                               , desestatus : { header : 'Estatus', 'class' : 'font-weight-bold' }
                                               , nivel_riesgo  : { header : 'Riesgo'}
                                               , Ver      : { header    : 'Ver Inmueble', 'boton' : true ,'classb' : 'btn-ver', 'funcion' : 'inmu_ver' }
                                             }
                                  armadatagrid(data,dis);
                            } else {
                                  crearMensaje(true,"Atención", ' No se encontraron registros');
                                  return;
                            }
                         },
                            error: function( jqXhr, textStatus, errorThrown ){
                                  var errores=jqXhr.responseJSON.errors;
                                  for (var x in errores) {
                                        crearMensaje(true,"Error ", errores[x]);
                                        break;
                                 }
                       }
                  });
             });
        $("#buscart").trigger("click");
     }

     if ($('main')[0].id=='estadistica-acreditados') {
        $("#rfc").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#nombres").keyup(function(e){ e.currentTarget.value=e.currentTarget.value.toLocaleUpperCase(); })
        $("#buscart").click(function(e){
             e.preventDefault();
             var Data1 = {
                  nombres: $('#alias')[0].value,
                  email :  $('#email')[0].value,
                 };
                  $.ajax({
                            type: 'get',
                            url: mipath()+'api/users/estadistica',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: Data1,
                            success: function(data){
                            if (data.length>0) {
                                   var dis = {
                                                 idesta    : { header    : 'ID', 'class' : 'd-none' }
                                               , nombrecompleto : { header : 'Nombre', 'class' : 'font-weight-bold' }
                                               , email :  { header : 'Correo electrnico', 'class' : 'font-weight-bold' }
                                               , estable : { header : 'Establecimientos', 'class' : 'font-weight-bold' }
                                               , inmu : { header : 'Inmuebles', 'class' : 'font-weight-bold' }
                                               , capturando : { header : 'Capturando', 'class' : 'font-weight-bold' }
                                               , capturados : { header : 'Capturados', 'class' : 'font-weight-bold' }
                                               //, Ver      : { header    : 'Ver Inmueble', 'boton' : true ,'classb' : 'btn-ver', 'funcion' : 'inmu_ver' }
                                             }
                                  armadatagrid(data,dis);
                            } else {
                                  crearMensaje(true,"Atención", ' No se encontraron registros');
                                  return;
                            }
                         },
                            error: function( jqXhr, textStatus, errorThrown ){
                                  var errores=jqXhr.responseJSON.errors;
                                  for (var x in errores) {
                                        crearMensaje(true,"Error ", errores[x]);
                                        break;
                                 }
                       }
                  });
             });
        $("#buscart").trigger("click");
    }


     if ($('main')[0].id=='inmuebles-registrados') {
        $("#buscar").click(function(e){
             e.preventDefault();
             if ($('#nombres')[0].value=="" && $('#rfc')[0].value==""
                     ) {
                crearMensaje(true,"Atención", ' Al menos debe introducir un dato en la búsqueda');
                return;
             }
             var Data1 = {
                  nombres: $('#nombres')[0].value,
                  rfc :  $('#rfc')[0].value,
                  email_acreditado : $('#nombre-usuario').data('email')
                 };
                  $.ajax({
                            type: 'get',
                            url: mipath()+'api/establecimientos',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: Data1,
                            success: function(data){
                            if (data.length>0) {
                                   var dis = { numinmuebles : { header : 'numinmuebles', 'class' : 'font-weight-bold', 'funcion' : 'inmuebles_e', 'boton' : true , 'classb' : 'btn-ver','funcion' : 'ver_i'}
                                               , nombres : { header : 'Solicitante', 'class' : 'font-weight-bold' }
                                               , rfc :  { header : 'rfc', 'class' : 'font-weight-bold' }
                                               , ver : { header : 'Ver perfil', 'boton' : true ,'classb' : 'btn-ver', 'funcion' : 'ver_e' }
                                               , editar : { header : 'Editar', 'boton' : true ,'classb' : 'btn-editar', 'funcion' : 'editar_e' }
                                               , eliminar : { header : 'Eliminar', 'boton' : true ,'classb' : 'btn-eliminar', 'funcion' : 'eliminar_e' }
                                             }
                                  armadatagrid(data,dis);
                            } else {
                                  crearMensaje(true,"Atención", ' No se encontraron registros');
                                  return;
                            }
                         },
                            error: function( jqXhr, textStatus, errorThrown ){
                                  var errores=jqXhr.responseJSON.errors;
                                  for (var x in errores) {
                                        crearMensaje(true,"Error ", errores[x]);
                                        break;
                                 }
                       }
                  });
             });
        $("#buscar").trigger("click");
     }




    if ($('main')[0].id=='autorizacion_pone') {
      $("button[id^='aceptarcambio']").on('click', function(e) {
        e.preventDefault();
        if ($("input[name='estatus']:checked").val()==2 && $("#rechazo")[0].value=="") {
          crearMensaje(true,"¡Atención !", ' Debe de indicar cual es el motivo del rechazo');
          return;
        }
        $('#confirmacionModalr').modal('hide');
        $('#confirmacionModal').modal('hide');
        var Data1 = {
          activo: $("input[name='estatus']:checked").val(),
          rechazo: $("#rechazo")[0].value
        };
        $.ajax({
          type: 'put',
          url: '../api/users/'+$('#autorizacion_pone').data("id"),
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          contentType: 'application/json',
          data: JSON.stringify(Data1),
          dataType: 'json',
          success: function(data){
            $("#rechazo")[0].value=="";
            crearMensaje(false,"¡Cambio exitoso!", ' Se cambió el estatus del usuario');
            return;
          },
          error: function( jqXhr, textStatus, errorThrown ){
            crearMensaje(true,"Error ",jqXhr.responseJSON.message);
          }
        });

      });
      var cc=""; // varable para cancelar el cambio de estatus
      $("button[id^='cancelarcambio']").on('click', function(e) {
        //$('#confirmacionModal').modal('hide');
        location.reload();
      });
    }

  $('.btn-ver-inmuebles').on('click', function() {
    var rfc = $(this).parent().siblings('.rfc').html();
    window.location = mipath() + 'inmuebles-registrados/' + rfc;
  });

  $('.btn-perfil-establecimiento').on('click', function() {
    var id = $(this).data('id');
    window.location = mipath() + 'inmuebles-registrados-secretaria/' + id;
  });

  $('.btn-ver-establecimientos').on('click', function(e) {
    e.preventDefault();
    window.location = mipath() + 'establecimientos-registrados-todos-secretaria/';
  });

  $('#v-pills-analisis-tab').on('click', function(e) {
    var name = $('#a_riesgos_filesystem').html();
    if (name !== '') {
      $('#analisis-riesgos').attr('href', mipath() + 'storage/' + name);
    }
  });

  $('#v-pills-reduccion-tab').on('click', function(e) {
    var name = $('#a_reduccion_filesystem').html();
    if (name !== '') {
      $('#reduccion-riesgos').attr('href', mipath() + 'storage/' + name);
    }
  });

  $('#v-pills-contingencias-tab').on('click', function(e) {
    var name = $('#a_contingencias_filesystem').html();
    if (name !== '') {
      $('#plan-contingencias').attr('href', mipath() + 'storage/' + name);
    }
  });

  $('#v-pills-continuidad-tab').on('click', function(e) {
    var name = $('#a_continuidad_filesystem').html();
    if (name !== '') {
      $('#continuidad-op').attr('href', mipath() + 'storage/' + name);
    }
  });

  // Extras
  $('#v-pills-documentos-tab').on('click', function(e) {
    for (var i = 6; i <= 39; i++) {
      var name = $('#a_' + i + '_filesystem').html();
      if (name !== '') {
        $('#' + i + '-anexos').attr('href', mipath() + 'storage/' + name);
      }
    }
  });

  $('.hide').hide();

  $('#tercer-add-establecimiento').on('click', function(e) {
    e.preventDefault();
    $('#aviso-check').prop("checked", false);
    $('#aviso-btn-accept').prop("disabled", true);
    $('#modalAviso').modal('show');
  });

  $('#aviso-check').on('change', function() {
    if (this.checked) {
      $('#aviso-btn-accept').prop("disabled", false);
    } else {
      $('#aviso-btn-accept').prop("disabled", true);
    }
  });

  $('#aviso-btn-accept').on('click', function() {
    window.location = window.mipath() + 'registrar-establecimiento';
  });

  $('#input_search').on('click', function() {
    var name = $('#input_search_name').val();
    var rfc = $('#input_search_rfc').val();
    $.ajax({
      type: 'GET',
      url:  mipath() + 'api/establecimientos-search/' + name + '/' + rfc
    })
    .done(function(response) {
      alert( "success" );
      console.log(response);
    })
    .fail(function(response) {
      alert( "error" );
      console.log(response);
    });
  });

  // Registro de alcaldía
  $('#alcaldia-container').hide();

  $("input[name=tipo_cuenta]").change(function () {   
    var tipo_cuenta = $(this).val();
    if (tipo_cuenta === 'T') {
      $('#alcaldia-container').hide();
      $('#tercer-acreditado-container').show();
    }
    if (tipo_cuenta === 'A') {
      $('#alcaldia-container').show();
      $('#tercer-acreditado-container').hide(); 
    }
  });

  $("#creacuenta-alcaldia").click(function(e){
    e.preventDefault();
    var forms = document.getElementsByClassName('needs-validation-alcaldia');
    if (forms[0].checkValidity() === false) {
      forms[0].classList.add('was-validated');
      return;
    }

    var Data1 = {
      nombres: $('#alc-nombres')[0].value,
      email: $('#alc-email')[0].value,
      ape_pat: $('#alc-ape_pat')[0].value,
      ape_mat: $('#alc-ape_mat')[0].value,
      id_alcaldia: $('#alc-id_alcaldia')[0].value,
      password :  $('#alc-password')[0].value,
      password_confirmation :  $('#alc-password_confirma')[0].value
    };

    $.ajax({
      type: 'post',
      url: mipath()+'api/register?alcaldia',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: Data1,
      success: function(data){
        location.href = base_url+"/registro-exitoso";
      },
      error: function( jqXhr, textStatus, errorThrown ){
        var errores=jqXhr.responseJSON.errors;
        for (var x in errores) {
          crearMensaje(true,"Error ", errores[x]);
          break;
        }
      }
    });
  });
});

window.crearMensaje = function (error,titulo,mensaje,tiempo=2000) {
  $('#titleMsgModal').html(titulo);
  $('#bodyMsgModal').html(mensaje);
  $('#msgModal').modal('show');
  if (tiempo!=0) {
        setTimeout(function(){
                $('#msgModal').modal('hide');
        }, tiempo);
  }
}



     window.armadatagrid_titulos = function (dis,trp) {
         var dg=$('#__sd');
         if (dg[0]!=undefined) {
            var pn=dg[0].parentNode;
            pn.removeChild(dg[0])
         }
          tr=document.createElement('tr');
          tr.setAttribute('id','__sd');
          tr.setAttribute('data-pnid',trp.id);   /* id del node parent */
          thp=document.createElement('th');
          thp.setAttribute('colspan','6');

          ta=document.createElement('table');
          ta.setAttribute('class','tabla-inmuebles');
          thead=document.createElement('thead');
          tbody=document.createElement('tbody');
          tbody.setAttribute('id','dg_hija');
          trx=document.createElement('tr');

          for (var y in dis) {
              th=document.createElement('th');
              tdCelda = document.createTextNode(dis[y].header);
              if ('class' in dis[y]) {
                           th.setAttribute("class", dis[y].class);
              }
              th.appendChild(tdCelda);
              trx.appendChild(th);
          }

          //thead.appendChild(trx);
          tbody.appendChild(trx);
          ta.appendChild(thead);
          ta.appendChild(tbody);
          thp.appendChild(ta);
          tr.appendChild(thp);
          $(tr).insertAfter(trp);
          return $(tbody);
     };
     /*
         parametro 1=arreglo de registrso a desplegar
         parametro 2=json del armado de columnas
         parametro 3=id del elemento donde va a crear la tabla
         parametro 4=indica si arma los titulos
         parametro 5=cuando es una subtabla indica sobre cual renglon pone la nueva tabla
         
     */
     window.armadatagrid = function (regs,dis=null,quedg='dg_autorizacion',titulos=false,ren=false) {
           if (titulos) {
               dg=armadatagrid_titulos(dis,ren)
           } else {
             var dg=$('#'+quedg);
             while (dg[0].firstChild) {
                  dg[0].removeChild(dg[0].firstChild);
             }
           }
           var tr='';
           var td='';
           var campos='';
           for (var x in regs) {  /* arma los renglones detalle del datagrid */
               console.log(regs[x]);
               tr=document.createElement('tr');
               tr.setAttribute('id','_'+regs[x].id+'_'+quedg);
               dg[0].appendChild(tr)
               campos=regs[x];
               for (var y in dis) {
                    if (campos.hasOwnProperty(y)) {
                        td=document.createElement('td');
                        p=document.createElement('p');
                        tdCelda = document.createTextNode(campos[y]+' ');
                        if ('class' in dis[y]) {
                           td.setAttribute("class", dis[y].class);
                        }
                        p.appendChild(tdCelda);
                        td.appendChild(p);
                        tr.appendChild(td);
                        if ('boton' in dis[y]) {
                           //td=document.createElement('td');
                           bt=document.createElement('button');
                           bt.setAttribute('type', 'button');
                           if ('classb' in dis[y]) {
                              bt.setAttribute("class", dis[y].classb);
                           }
                           bt.setAttribute('onclick', dis[y].funcion+'('+tr.id+')');
                           td.appendChild(bt);
                           //tr.appendChild(td);
                        }
                    } else {
                        if ('boton' in dis[y]) {
                           td=document.createElement('td');
                           bt=document.createElement('button');
                           bt.setAttribute('type', 'button');
                           if ('classb' in dis[y]) {
                              bt.setAttribute("class", dis[y].classb);
                           }
                           bt.setAttribute('onclick', dis[y].funcion+'('+tr.id+')');
                           td.appendChild(bt);
                           tr.appendChild(td);
                        }
                    }
               }
           }
     }
/* muestra los datos 
 * el tercer parametro indica si para validar utiliza el checkvalidity */
     window.muestradatos = function (forma,datos,cv=0){
                                var inputs=forma.getElementsByTagName('input');
                                var textarea=forma.getElementsByTagName('textarea');
                                var selects=forma.getElementsByTagName('select');
                                for (var x in inputs) {
                                    //console.log('id='+inputs[x].id+' type='+inputs[x].type);

                                    if (inputs[x].type=='text' || inputs[x].type=='number' || inputs[x].type=='date' || inputs[x].type=='email' ) {

                                        inputs[x].value=datos[inputs[x].id.replace('wl_','')];
                                    }
                                    if (inputs[x].type=='radio' ) {
                                       if (inputs[x].value==datos[inputs[x].name.replace('wl_','')]) {
                                           inputs[x].checked=true;
                                       }
                                    }
                                    if (inputs[x].type=='checkbox') {
                                       if (inputs[x].value==datos[inputs[x].id]) {
                                           inputs[x].checked=true;
                                       }
                                    }
                                    if (inputs[x].type=='file') {
                                       if (datos[inputs[x].name]!=null) {
                                           var quediv=$($(inputs[x])[0].closest('div'));
                                           crearBotonDescarga(datos['filesystem_'+inputs[x].id.split('_')[2]],quediv);
                                       }
                                    }
                                }
                                for (var x in selects) {
                                    if (typeof(selects[x])=='object') {
                                       if ($(selects[x]).hasClass('selectpicker')) {
                                          selects[x].value=datos[selects[x].id.replace('wl_','')];
                                          $($(selects[x])[0].parentNode).find('.filter-option-inner-inner')[0].innerHTML=selects[x][selects[x].selectedIndex].innerHTML;
                                       } else {
                                          selects[x].value=datos[selects[x].id.replace('wl_','')];
                                       }
                                    }
                                }

                                for (var x in textarea) {
                                    if (typeof(textarea[x])=='object') {
                                     textarea[x].value=datos[textarea[x].id.replace('wl_','')];
                                    }
                                }

                               if (cv==0) {
                                   if (forma.checkValidity()==true) {
                                      $('#v-pills-'+forma.id.replace('f_','')+'-tab').children()[0].classList.remove('d-none')
                                   }
                               }
                               if (cv==1) {
                                   if (validaarchivos(forma.id)==true) {
                                      $('#v-pills-'+forma.id.replace('f_','')+'-tab').children()[0].classList.remove('d-none')
                                   }
                               }
                               if (cv==3) {
                                  var checkedpcd = $('input[type="checkbox"][name="pcd"]:checked').length;
                                  if (validaarchivos(forma.id)==true & checkedpcd>0) {
                                      $('#v-pills-'+forma.id.replace('f_','')+'-tab').children()[0].classList.remove('d-none')
                                  }
                               }
     }

     window.ver3 = function (ren){
          console.log(ren);
          location.href = "./detalle-tercer-acreditado/"+ren.id.split('_')[1]; /* en el id contiene el numero de acreditado */
     }

     window.ver_e = function (ren){
          console.log(ren);
          location.href = "registrar-establecimiento/"+ren.id.split('_')[1];  /* en el id contiene el numero de establecimiento */
     }

     window.eliminar_e = function (ren){
            $('#siacepto').click(function(e){
                 $('#d_siacepto')[0].classList.add('d-none');
                 $('#msgModal').modal('hide');
                 console.log('entro a eliminar el establecimiento'+ren);
                 eliminar_e_aceptado(ren);
            });
            $('#d_siacepto')[0].classList.remove('d-none');
            
            crearMensaje(true,"Atención", " Esta seguro de eliminar el establecimiento?",0);
     }

     window.eliminar_e_aceptado = function (ren){
          console.log(ren);
          $.ajax({
                            type: 'delete',
                            url:  'api/establecimientos/'+ren.getElementsByTagName('td')[2].innerText+'/'+$('#nombre-usuario').data('email'),   /* obtiene el numero de RFC */
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            success: function(data){
                                  crearMensaje(true,"Atención", ' El establecimiento junto con sus inmuebles fueron borrados');
                                  var pn=ren.parentNode;
                                  pn.removeChild(ren);
                                  return;
                         },
                            error: function( jqXhr, textStatus, errorThrown ){
                                  var errores=jqXhr.responseJSON.errors;
                                  for (var x in errores) {
                                        crearMensaje(true,"Error", errores[x]);
                                        break;
                                 }
                       }
                  });

     }

     window.inmu_ed = function (ren){  /* edita un inmueble */
          console.log(ren);
          ides=ren.closest('#__sd').dataset.pnid.split('_')[1];  // id del establecimiento
          idin=ren.id.split('_')[1];   // id el inmueble
          location.href = "registrar-establecimiento/"+ides+"/"+idin;
     }

     window.inmu_ver = function (ren){  /* consulta un inmueble */
          console.log(ren);
          //ides=ren.closest('#__sd').dataset.pnid.split('_')[1];  // id del establecimiento
          idin=ren.id.split('_')[1];   // id el inmueble
          location.href = mipath()+"inmuebles-registrados-secretaria/"+idin;
     }


     window.inmu_el = function (ren){  /* elimina un inmueble */
            $('#siacepto').click(function(e){
                 $('#d_siacepto')[0].classList.add('d-none');
                 $('#msgModal').modal('hide');
                 console.log('entro a eliminar el establecimiento'+ren);
                 inmu_el_aceptado(ren);
            });
            $('#d_siacepto')[0].classList.remove('d-none');

            crearMensaje(true,"Atención", " Esta seguro de eliminar el inmueble?",0);

     }
     window.inmu_el_aceptado = function (ren){  /* elimina un inmueble */
          console.log(ren);
          $.ajax({
                            type: 'delete',
                            url:  'api/inmuebles/'+ren.getElementsByTagName('td')[0].innerText,   /* obtiene el numero de RFC */
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            success: function(data){
                                  //crearMensaje(true,"Atención", ' El inmueble fue borrado');
                                  var pn=ren.parentNode;
                                  $("#"+pn.parentNode.parentNode.parentNode.dataset.pnid)[0].getElementsByTagName('td')[0].getElementsByTagName('p')[0].innerText=pn.getElementsByTagName('tr').length-2;
                                  pn.removeChild(ren);
                                  return;
                         },
                            error: function( jqXhr, textStatus, errorThrown ){
                                  var errores=jqXhr.responseJSON.errors;
                                  for (var x in errores) {
                                        crearMensaje(true,"Error", errores[x]);
                                        break;
                                 }
                       }
                  });

     }


     window.ver_i = function (ren){  /* boton para ver los inmuebles de un establecimiento */
          $.ajax({
                            type: 'get',
                            url: 'api/inmuebles/'+ren.getElementsByTagName('td')[2].innerText+'/'+$('#nombre-usuario').data('email'),
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            success: function(data){
                            +ren.getElementsByTagName('button')[0].classList.add('active');
                            if (data.length>0) {
                                    var dis = {  id       : { header    : 'ID',  'class' : 'd-none'}
                                               , alias    : { header    : 'Alias'}
                                               , desalcaldia    : { header    : 'Alcaldia' }
                                               , calle_completa    : { header    : 'Calle'}
                                               , desestatus  : { header : 'Estatus'}
                                               , Ver      : { header    : 'Editar', 'boton' : true ,'classb' : 'btn-editar', 'funcion' : 'inmu_ed' }
                                               , Eliminar : { header    : 'Eliminar', 'boton' : true ,'classb' : 'btn-eliminar', 'funcion' : 'inmu_el' }
                                             }
                                  armadatagrid(data,dis,'dg_hija',true,ren);
                            } else {
                                  crearMensaje(true,"Atención", ' No se encontraron registros');
                                  return;
                            }
                         },
                            error: function( jqXhr, textStatus, errorThrown ){
                                  var errores=jqXhr.responseJSON.errors;
                                  for (var x in errores) {
                                        crearMensaje(true,"Error", errores[x]);
                                        break;
                                 }
                       }
                  });

     }

     window.ver_it = function (ren){  /* boton para ver los inmuebles de un establecimiento */
          ren.getElementsByTagName('button')[0].classList.toggle('active');
          if (ren.getElementsByTagName('button')[0].classList.contains('active')) {
              $.ajax({
                            type: 'get',
                            url: mipath()+'api/inmuebles/'+ren.getElementsByTagName('td')[2].innerText+'/'+ren.getElementsByTagName('td')[4].innerText,
                            headers: {'X-C1GSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            success: function(data){
                            if (data.length>0) {
                                    var dis = {  id       : { header    : 'ID', 'class' : 'd-none' }
                                               , alias    : { header    : 'Alias'}
                                               , desalcaldia    : { header    : 'Alcaldia' }
                                               , calle_completa    : { header    : 'Calle'}
                                               , desestatus  : { header : 'Estatus'}
                                               , nivel_riesgo  : { header : 'Riesgo'}
                                               , Ver      : { header    : 'Ver Inmueble', 'boton' : true ,'classb' : 'btn-ver', 'funcion' : 'inmu_ver' }
                                          }
                                  armadatagrid(data,dis,'dg_hija',true,ren);
                            } else {
                                  crearMensaje(true,"Atención", ' No se encontraron inmuebles');
                                  return;
                            }
                         },
                            error: function( jqXhr, textStatus, errorThrown ){
                                  var errores=jqXhr.responseJSON.errors;
                                  for (var x in errores) {
                                        crearMensaje(true,"Error", errores[x]);
                                        break;
                                 }
                       }
                  });
           }
           else {
                var dg=$('#__sd');
                if (dg[0]!=undefined) {
                   var pn=dg[0].parentNode;
                   pn.removeChild(dg[0])
                }

           }
     }


        /*window.crearMensaje = function (error,titulo,mensaje,tiempo=3000){
                var clase_mensaje = error==true?"avisos-alerta":"alert-success";
                var mensaje_alert = '<div class="avisos-alerta msj_js '+clase_mensaje+'">';
                mensaje_alert += '<p id="mensaje_negritas">'+titulo+'<span id="mensaje">' +mensaje+'</span></p>';
                mensaje_alert += '</div>';
                $("body").append(mensaje_alert);
                $(".msj_js").show();
        setTimeout(function(){
                $(".msj_js").remove();
        }, tiempo);
        }*/


        window.crearBotonDescarga = function (filesystem,quediv) {
                              if (quediv.hasClass('col-md-8')) {
                                 quediv.next()[0].getElementsByTagName('a')[0].href=mipath()+'storage/'+filesystem;
                              } else {
                              quediv[0].getElementsByTagName('input')[0].innerHTML=filesystem;
                              //quediv[0].getElementsByTagName('input')[0].value=filesystem;
                              quediv[0].getElementsByTagName('input')[0].setAttribute('data-archivo',filesystem)
                              quediv.addClass('col-md-8');
                              div = document.createElement('div');
                              div.setAttribute('class','col-md-4');
                              div.setAttribute('id',filesystem);
                              a=document.createElement('a');
                              a.setAttribute('href',mipath()+'storage/'+filesystem);
                              a.setAttribute('target','_blank');
                              a.setAttribute('class','btn-descargar');
                              tdCelda = document.createTextNode('Ver archivo')
                              a.appendChild(tdCelda);
                              div.appendChild(a);
                              quediv[0].parentNode.appendChild(div);
                              }
        }

   window.mipath = function () {
      var path = window.location.pathname;
      var pathName = path.substring(0, path.lastIndexOf('public/') + 7);
      return window.location.protocol+'//'+window.location.host+pathName;
   }
   window.apaga_pills = function () {
                          pills=$('a[id^="v-pills-"]');
                          for (var x in pills) {
                             console.log('pills'+pills[x].id);
                             if (pills[x].id!=undefined) {
                                pills[x].classList.remove('active');
                                pills[x].classList.remove('show');
                             }
                          }
                          pills=$('div[id^="v-pills-"]');
                          for (var x in pills) {
                             console.log('pills'+pills[x].id);
                             if (pills[x].id!=undefined) {
                                pills[x].classList.remove('active');
                                pills[x].classList.remove('show');
                             }
                          }

   }
   window.prende_pills = function (que) {
                    $('#v-pills-'+que)[0].classList.add('active');
                    $('#v-pills-'+que)[0].classList.add('show')
                    $('#v-pills-'+que+'-tab')[0].classList.add('active')
                    queparent=$('#v-pills-'+que+'-tab')[0].closest('div').parentNode;
                    $('a[href^="#'+queparent.id+'"]')[0].classList.add('active');
                    $('a[href^="#'+queparent.id+'"]')[0].classList.add('show');
                    queparent.classList.add('show');
   }

   window.cambia_dato = function (e) {
                  var formdd = $('form[id="f_boleta"]')[0];
                  if ('id' in formdd.dataset) {
                         var id=formdd.dataset.id;
                  } else { var id=''; }
                  quedato=e.currentTarget.id.replace('wl_','');
                  quedato1=e.currentTarget;
                  if (e.currentTarget.type=='radio') {
                     quedato=e.currentTarget.name.replace('wl_','');
                  }
                  var Data1 = {};
                        Data1[quedato] = e.currentTarget.value;
                        //Data1['rfc'] = $('#rfc')[0].value;
                        //Data1['pantalla'] = e.currentTarget.closest('form').id;
                        //Data1['email_acreditado'] = $('#nombre-usuario').data('email');

                    $.ajax({
                       type: 'put',
                       url:  mipath()+'api/boletas/'+id,
                       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                       data: Data1,
                       success: function(data){
                             if (formdd.dataset.id=='' && data.id!='') {
                                 formdd.dataset.id=data.id;
                             }
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                          quedato1.value=quedato1.defaultValue;
                          var errores=jqXhr.responseJSON.errors;
                          for (var x in errores) {
                                     crearMensaje(true,"Error ", errores[x]);
                                     quedato1.focus();
                                     break;
                          }
                       }
                    });
   }

   /* valida que ya se hubiese subido los archivos  en una forma */
   window.validaarchivos = function (forma) {
        console.log('entro en validar archivos');
        inputs=$('#'+forma)[0].getElementsByTagName('input');
        for (var x in inputs) {
             if (inputs[x].type=='file') {
                if ('archivo' in inputs[x].dataset) { }
                else {return false };
             }
        }
        return true;
   }

   window.validasimulacros = function (forma) {
     if ($("div[id^='simulacros_']").length>0) {
         $('#v-pills-simulacros-tab').children()[0].classList.remove('d-none')
     } else {
         $('#v-pills-simulacros-tab').children()[0].classList.add('d-none')
     }
   }

   window.validapuntos = function (forma) {
     if ($("div[id^='puntos_']").length>0) {
         $('#v-pills-punto-tab').children()[0].classList.remove('d-none')
     } else {
         $('#v-pills-punto-tab').children()[0].classList.add('d-none')
     }
   }


   /* marca que puestos ya fueron registrados 
           si valor es diferente de cero busca la figura*/
   window.marcapuesto = function (valor) {
         figura=$("#id_figuras option[value='" + valor + "']")[0].innerHTML.split("-")[0];
         //if ($("#id_figuras option[value='"+valor+"']")[0].dataset.unapersona==1) {   /*el puesto de una sola persona */
            //if ($('a[id^="v-pills"]:contains("' + figura + '")').children().hasClass('d-none')) {
              $('a[id^="v-pills"]:contains("'+figura+'")').children()[0].classList.remove('d-none');
            //} else {  $('a[id^="v-pills"]:contains("'+figura+'")').children()[0].classList.add('d-none'); }
         //}
   }

   /* marca el puesto por la descripcion del puesto */
   window.marcapuestoxdes = function (figura) {
            //if ($('a[id^="v-pills"]:contains("' + figura + '")').children().hasClass('d-none')) {
              try { $('a[id^="v-pills"]:contains("'+figura+'")').children()[0].classList.remove('d-none'); } catch (err) { };
            //((} else {  $('a[id^="v-pills"]:contains("'+figura+'")').children()[0].classList.add('d-none'); }
   }

   window.desmarcapuesto = function (figura,unapersona) {
         figurasp=figura.split("-")[0];
         if (unapersona==1) {
            if ($('a[id^="v-pills"]:contains("' + figurasp + '")').children().hasClass('d-none')) {
            } else {  $('a[id^="v-pills"]:contains("'+figurasp+'")').children()[0].classList.add('d-none'); }
         } else {
           if ($('p:contains("'+figura+'")').length==0) {
              $('a[id^="v-pills"]:contains("'+figurasp+'")').children()[0].classList.add('d-none');
           }
         }
   }

   window.cambiapersona = function (tipo) {
             if (tipo=="M") {
                 $('#lnombres').text("Razón social*");
                 $('#nombres').attr("placeholder","Escribe la razón social");
                 $('#apa').hide();
                 $('#nom').attr("class","col-md-12 mb-3");
                 $('#ama').hide();
                 $('#ape_pat').attr("required",false);
             }
             if (tipo=="F") {
                 $('#lnombres').text("Nombres(s)*");
                 $('#nombres').attr("placeholder","Escribe tu(s) nombre(s)");
                 $('#apa').show();
                 $('#nom').attr("class","col-lg-4");
                 $('#ama').show();
                 $('#ape_pat').attr("required",true);
             }

   }

   window.cambiapersona_l = function (tipo) {
             if (tipo=="M") {

                 $('#nombres_rl').attr("required",false);
                 $('#ape_pat_rl').attr("required",false);
                 $('#email_rl').attr("required",false);
                 $('#id_identificacion').attr("required",false);
                 $('#folioIdentificacion').attr("required",false);
                 $('#id_nacionalidad').attr("required",false);

                 $('#razon_social_rl').attr("required",true);
                 $('#folioacta_rl').attr("required",true);
                 $('#fechadeotorgamiento').attr("required",true);
                 $('#nombreexpide').attr("required",true);
                 $('#numeronotario_el').attr("required",true);
                 $('#id_entidad').attr("required",true);

                 $('[id^=fisi_').hide();
                 $('[id^=mora_').show();
             }
             if (tipo=="F") {
                 $('#nombres_rl').attr("required",true);
                 $('#ape_pat_rl').attr("required",true);
                 $('#email_rl').attr("required",true);
                 $('#id_identificacion').attr("required",true);
                 $('#folioIdentificacion').attr("required",true);
                 $('#id_nacionalidad').attr("required",true);

                 $('#razon_social_rl').attr("required",false);
                 $('#folioacta_rl').attr("required",false);
                 $('#fechadeotorgamiento').attr("required",false);
                 $('#nombreexpide').attr("required",false);
                 $('#numeronotario_el').attr("required",false);
                 $('#id_entidad').attr("required",false);

                 $('[id^=mora_').hide();
                 $('[id^=fisi_').show();
             }
   }
