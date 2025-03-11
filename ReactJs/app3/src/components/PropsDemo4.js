/*
    how to access props in functional component
*/

function PropsDemo4(Props){
    return <>
        <h1>Example of Props Demo in functional component</h1>
        <h1>Welcome {Props.data.fn} {Props.data.ln} to {Props.data.ct}</h1>
    </>
}

export default PropsDemo4;