'use strict';

var LikeButton = function LikeButton(_ref) {
  var agreements = _ref.agreements;

  return React.createElement(
    "table",
    { className: "pure-table" },
    React.createElement(
      "thead",
      null,
      React.createElement(
        "tr",
        null,
        React.createElement(
          "th",
          null,
          "ID"
        ),
        React.createElement(
          "th",
          null,
          "Nombre"
        ),
        React.createElement(
          "th",
          null,
          "Sector"
        ),
        React.createElement(
          "th",
          null,
          "Grado"
        ),
        React.createElement(
          "th",
          null,
          "Ciclo acad\xE9mico"
        ),
        React.createElement(
          "th",
          null,
          "Carrera"
        ),
        React.createElement(
          "th",
          null,
          "Instituci\xF3n"
        ),
        React.createElement(
          "th",
          null,
          "Vigencia"
        ),
        React.createElement(
          "th",
          null,
          "Delegaci\xF3n"
        )
      )
    ),
    React.createElement(
      "tbody",
      null,
      agreements.map(function (agreement) {
        return React.createElement(
          "tr",
          { key: agreement.id },
          React.createElement(
            "td",
            null,
            agreement.id
          ),
          React.createElement(
            "td",
            null,
            agreement.nombre
          ),
          React.createElement(
            "td",
            null,
            agreement.sector
          ),
          React.createElement(
            "td",
            null,
            agreement.grado_academico
          ),
          React.createElement(
            "td",
            null,
            agreement.ciclo_academico
          ),
          React.createElement(
            "td",
            null,
            agreement.carrera
          ),
          React.createElement(
            "td",
            null,
            agreement.institucion_educativa
          ),
          React.createElement(
            "td",
            null,
            agreement.vigencia
          ),
          React.createElement(
            "td",
            null,
            agreement.delegacion
          )
        );
      })
    )
  );
};