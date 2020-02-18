'use strict';
const LikeButton = ({ agreements }) => {
  return(
      <table className="pure-table">
        <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Sector</th>
          <th>Grado</th>
          <th>Ciclo académico</th>
          <th>Carrera</th>
          <th>Institución</th>
          <th>Vigencia</th>
          <th>Delegación</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        {
          agreements.map((agreement) => (
            <tr key={agreement.id}>
              <td>{agreement.id}</td>
              <td>{agreement.nombre}</td>
              <td>{agreement.sector}</td>
              <td>{agreement.grado_academico}</td>
              <td>{agreement.ciclo_academico}</td>
              <td>{agreement.carrera}</td>
              <td>{agreement.institucion_educativa}</td>
              <td>{agreement.vigencia}</td>
              <td>{agreement.delegacion}</td>
              <td>
                <a href={`/agreement/edit/${agreement.id}`}>Editar</a>
              </td>
            </tr>
          ))
        }
        </tbody>
      </table>
  )
}
