export function HighOrderComponetRed(Props) {
    return <>
        <div style={{ backgroundColor: "red", color: "white", padding: "20px" }}>
            <Props.counter></Props.counter>
        </div>
    </>
}

export function HighOrderComponetGreen(Props) {
    return <>
        <div style={{ backgroundColor: "green", color: "white", padding: "20px" }}>
            <Props.counter></Props.counter>
        </div>
    </>
}

export function HighOrderComponetBlue(Props) {
    return <>
        <div style={{ backgroundColor: "blue", color: "white", padding: "20px" }}>
            <Props.counter></Props.counter>
        </div>
    </>
}