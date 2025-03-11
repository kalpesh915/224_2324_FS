/*
    how to access props in functional component
*/

function PropsDemo5(p){
    return <>
        <h1>Example of Props Demo in functional component</h1>
        <h1>Welcome {p.data.fn} {p.data.ln} to {p.data.ct}</h1>
    </>
}

export default PropsDemo5;