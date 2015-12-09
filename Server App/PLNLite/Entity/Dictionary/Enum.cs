namespace PLNLite.Entity.Dictionary
{
    public enum Bulan : byte
    {
        Januari = 1, Februari, Maret, April, Mei, Juni, Juli, Agustus, September, Oktober, November, Desember
    }

    public enum BulanRomawi : byte
    {
        I = 1, II, III, IV, V, VI, VII, VIII, IX, X, XI, XII
    }

    public enum PrintedDocumentStatus : byte
    {
        InProcess = 1, Reviewed, Correction, Approved, Rejected, Printed
    }

    public enum ProductStatus : byte
    {
        InProcess = 1, Quarantine, Correction, Reviewed, Approved, Rejected, Released
    }

    public enum LabelStatus : byte
    {
        Quarantine = 1, Reject, Release
    }

    public enum ProductManagementModuleFlow : byte
    {
        ProductionPlanning = 1, MasterFormulation, Production, Filling, QualityControl, QualityAssurance, Inventory, ProductAllocation
    }

    public enum QualificationAnswerManual : byte
    {
        Partikulat = 1, Volume = 2, Pemerian, Cosmetic, Bagus
    }

    public enum QualificationAnswerLup : byte
    {
        Bagus = 1, Reject
    }

    public enum WIP : byte
    {
        Strain = 1, SingleHarvest, Bulk, FinalBulk, FinishedGood
    }

    public enum StockOnHand : byte
    {
        FinishedGood = 1, SemiFinishedGood, RawMaterial
    }

    public enum UnitCase : byte
    {
        Warehouse = 1, Purchase, Sales
    }

    public enum Complaint : byte
    {
        Problem = 1, SubProblem
    }
}